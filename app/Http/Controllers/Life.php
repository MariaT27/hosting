<?php namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Domain\TripStatsCalculator;
use App\Gig;
use App\Trip;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class Life extends Controller
{
    public function index()
    {
        $to = request('to');
        $from = request('from');

        $validator = \Validator::make(compact('from', 'to'), [
            'to' => 'nullable|date',
            'from' => 'nullable|date'
        ]);

        abort_unless($validator->passes(), 404);

        $trips = Trip::withCount('photos')
            ->where('user_id', 1)
            ->visible()
            ->when($from, function (Builder $query) use ($from) {
                return $query->where('date_start', '>=', $from);
            })
            ->when($to, function (Builder $query) use ($to) {
                return $query->where('date_start', '<=', $to);
            })
            ->orderBy('date_start', $from || $to ? 'asc' : 'desc')
            ->get()
            ->groupBy(function ($model) {
                return $model->year;
            });

        return view($this->view, compact('trips'));
    }

    public function calendar(Request $request)
    {
        /** @var \App\User $user */
        $user = $request->user();
        $includeOnlyVisible = $user === null || !$user->isAdmin();

        $trips = Trip::query()
            ->where('user_id', 1)
            ->where('city_id', '<>', 1)
            ->when($includeOnlyVisible, function (Builder $query) {
                $query->visible();
            })
            ->orderBy('date_start')
            ->get();

        $stats = new TripStatsCalculator($trips);

        return view($this->view, [
            'trips' => $trips,
            'cities' => $stats->citiesByYearsCount(),
            'calendar' => $stats->calendar(),
            'lastDate' => $stats->lastDate(),
            'countries' => $stats->countriesByYearsCount(),
            'firstDate' => $stats->firstDate(),
            'newCities' => $stats->newCitiesByYearsCount(),
            'daysInTrips' => $stats->daysInTrips(),
            'newCountries' => $stats->newCountriesByYearsCount(),
        ]);
    }

    public function cities()
    {
        $trips = Trip::tripsByCities(1);

        $cities = \CityHelper::cachedById()
            ->filter(function (City $city) use (&$trips) {
                return isset($trips[$city->id]);
            })
            ->each(function (City $city) use (&$trips) {
                $city->trips_count = $trips[$city->id]['total'] ?? 0;
                $city->trips_published_count = $trips[$city->id]['published'] ?? 0;
            })
            ->sortBy(City::titleField());

        return view($this->view, compact('cities'));
    }

    public function city(City $city)
    {
        $trips = $city->trips()
            ->where('user_id', 1)
            ->withCount('photos')
            ->visible()
            ->get()
            ->groupBy(function ($model) {
                return $model->year;
            });

        $publishedTrips = $trips->where('status', Trip::STATUS_PUBLISHED);

        event(new \App\Events\Stats\CityViewed($city->id));

        if (1 === sizeof($publishedTrips)) {
            /* @var Trip $trip */
            $trip = $publishedTrips->first();

            return redirect($trip->www());
        }

        $city->loadCountry();

        \Breadcrumbs::push(trans('menu.countries'), "life/countries")
            ->push($city->country->title, "life/countries/{$city->country->slug}")
            ->push($city->title);

        return view('life.city', compact('city', 'trips'));
    }

    public function countries()
    {
        $countries = Country::allWithCitiesAndTrips(1);

        return view($this->view, compact('countries'));
    }

    public function country($slug)
    {
        $country = \CountryHelper::findBySlugOrFail($slug);

        $trips = $country->trips()
            ->where('user_id', 1)
            ->withCount('photos')
            ->visible()
            ->get()
            ->groupBy(function ($model) {
                return $model->year;
            });

        \Breadcrumbs::push($country->title, "life/countries/{$country->slug}");

        event(new \App\Events\Stats\CountryViewed($country->id));

        return view($this->view, compact('country', 'trips'));
    }

    public function gig(Gig $gig)
    {
        $tpl = $gig->template();

        abort_unless(view()->exists($tpl), 404);

        \Breadcrumbs::push(trans('menu.gigs'), 'life/gigs')
            ->push($gig->title);

        event(new \App\Events\Stats\GigViewed($gig->id));

        $timeline = $gig->artistTimeline();

        // Для собственных фотографий в тексте истории
        $slug = "gigs/{$gig->slug}";

        return view($tpl, compact('gig', 'slug', 'timeline'));
    }

    public function gigs()
    {
        $gigs = Gig::with('artist')
            ->orderBy('date', 'desc')
            ->get()
            ->groupBy(function ($model) {
                return $model->date->year;
            });

        return view($this->view, compact('gigs'));
    }

    public function page($page)
    {
        if ($page === 'japanese') {
            return redirect(path('Japanese@index'), 301);
        }

        $tpl = 'life.' . str_replace('.', '_', $page);

        if (view()->exists($tpl)) {
            return view($tpl, compact('page'));
        }

        if ($trip = $this->getTrip($page)) {
            return $this->trip($trip);
        }

        if (null !== $city = \CityHelper::findBySlug($page)) {
            return $this->city($city);
        }

        if ($gig = $this->getGig($page)) {
            return $this->gig($gig);
        }

        return abort(404);
    }

    public function trip(Trip $trip)
    {
        $tpl = $trip->template();

        abort_unless(view()->exists($tpl), 404);

        $trip->loadCityAndCountry();

        \Breadcrumbs::push(trans('menu.countries'), "life/countries")
            ->push($trip->city->country->title, "life/countries/{$trip->city->country->slug}")
            ->push($trip->city->title, "life/{$trip->city->slug}")
            ->push($trip->localizedDate());

        event(new \App\Events\Stats\TripViewed($trip->id));

        $timeline = $trip->cityTimeline();

        $next_trips = $trip->next()->get();
        $previous_trips = $trip->previous($next_trips->count())->get()->reverse();

        $comments = $trip->commentsPublished()->with('user')->orderBy('created_at')->get();

        return view($tpl, compact('comments', 'next_trips', 'previous_trips', 'timeline', 'trip'));
    }

    protected function appendBreadcrumbs(): void
    {
        $this->middleware('breadcrumbs:menu.life,life');
        $this->middleware('breadcrumbs:life.calendar,life/calendar')->only('calendar');
        $this->middleware('breadcrumbs:menu.cities,life/cities')->only('cities');
        $this->middleware('breadcrumbs:menu.countries,life/countries')->only('countries', 'country');
        $this->middleware('breadcrumbs:menu.gigs,life/gigs')->only('gigs');
    }

    protected function getGig(string $slug): ?Gig
    {
        return Gig::where('slug', $slug)->first();
    }

    protected function getTrip(string $slug): ?Trip
    {
        return Trip::where('user_id', 1)
            ->withCount('photos')
            ->where('slug', $slug)
            ->where('status', Trip::STATUS_PUBLISHED)
            ->first();
    }
}
