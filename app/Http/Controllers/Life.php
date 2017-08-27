<?php namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Gig;
use App\Trip;
use Illuminate\Database\Eloquent\Builder;

class Life extends Controller
{
    public function index()
    {
        $to = $this->request->input('to');
        $from = $this->request->input('from');

        $validator = \Validator::make(compact('from', 'to'), [
            'to' => 'nullable|date',
            'from' => 'nullable|date'
        ]);

        abort_unless($validator->passes(), 404);

        $trips = Trip::withCount('photos')
            ->visible()
            ->when($from, function (Builder $query) use ($from) {
                return $query->where('date_start', '>=', $from);
            })
            ->when($to, function (Builder $query) use ($to) {
                return $query->where('date_start', '<=', $to);
            })
            ->orderBy('date_start', $from || $to ? 'asc' : 'desc')
            ->get();

        return view($this->view, compact('trips'));
    }

    public function cities()
    {
        $trips = Trip::tripsByCities();

        $cities = City::orderBy(City::titleField())
            ->get()
            ->each(function ($city) use (&$trips) {
                $city->trips_count = $trips[$city->id]['total'] ?? 0;
                $city->trips_published_count = $trips[$city->id]['published'] ?? 0;
            })->filter->trips_count;

        return view($this->view, compact('cities'));
    }

    public function city(City $city)
    {
        $trips = $city->trips()
            ->withCount('photos')
            ->visible()
            ->get();

        $published_trips = $trips->where('status', Trip::STATUS_PUBLISHED);

        event(new \App\Events\Stats\CityViewed($city->id));

        if (1 === sizeof($published_trips)) {
            /* @var \App\Trip $trip */
            $trip = $published_trips->first();

            return redirect($trip->www());
        }

        \Breadcrumbs::push(trans('menu.countries'), "life/countries");
        \Breadcrumbs::push($city->country->title, "life/countries/{$city->country->slug}");
        \Breadcrumbs::push($city->title);

        return view('life.city', compact('city', 'trips'));
    }

    public function countries()
    {
        $trips = Trip::tripsByCities();

        $countries = Country::with('cities')
            ->orderBy(Country::titleField())
            ->get()
            ->each(function ($country) use (&$trips) {
                $trips_count = 0;
                $trips_published_count = 0;

                $country->filtered_cities = $country->cities->each(function ($city) use (&$trips, &$trips_count, &$trips_published_count) {
                    $city->trips_count = $trips[$city->id]['total'] ?? 0;
                    $city->trips_published_count = $trips[$city->id]['published'] ?? 0;

                    $trips_count += $city->trips_count;
                    $trips_published_count += $city->trips_published_count;
                })->filter->trips_count;

                $country->trips_count = $trips_count;
                $country->trips_published_count = $trips_published_count;
            })->filter->trips_count;

        return view($this->view, compact('countries'));
    }

    public function country($slug)
    {
        $country = Country::where('slug', $slug)->firstOrFail();
        $trips = $country->trips()
            ->withCount('photos')
            ->visible()
            ->get();

        \Breadcrumbs::push($country->title, "life/countries/{$country->slug}");

        event(new \App\Events\Stats\CountryViewed($country->id));

        return view($this->view, compact('country', 'trips'));
    }

    public function gig(Gig $gig)
    {
        $tpl = $gig->template();

        abort_unless(view()->exists($tpl), 404);

        \Breadcrumbs::push(trans('menu.gigs'), 'life/gigs');
        \Breadcrumbs::push($gig->title);

        event(new \App\Events\Stats\GigViewed($gig->id));

        $timeline = $gig->artistTimeline();

        return view($tpl, compact('gig', 'timeline'));
    }

    public function gigs()
    {
        $gigs = Gig::with('artist')->orderBy('date', 'desc')->get();

        return view($this->view, compact('gigs'));
    }

    public function page($page)
    {
        $tpl = 'life.' . str_replace('.', '_', $page);

        if (view()->exists($tpl)) {
            return view($tpl, compact('page'));
        }

        if ($trip = $this->getTrip($page)) {
            return $this->trip($trip);
        }

        if ($city = $this->getCity($page)) {
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

        \Breadcrumbs::push(trans('menu.countries'), "life/countries");
        \Breadcrumbs::push($trip->city->country->title, "life/countries/{$trip->city->country->slug}");
        \Breadcrumbs::push($trip->city->title, "life/{$trip->city->slug}");
        \Breadcrumbs::push($trip->localizedDate(), "life/{$trip->slug}");

        event(new \App\Events\Stats\TripViewed($trip->id));

        $timeline = $trip->cityTimeline();

        $next_trips = $trip->next()->get();
        $previous_trips = $trip->previous($next_trips->count())->get()->reverse();

        $comments = $trip->commentsPublished()->with('user')->orderBy('id')->get();

        return view($tpl, compact('comments', 'next_trips', 'previous_trips', 'timeline', 'trip'));
    }

    protected function appendBreadcrumbs()
    {
        $this->middleware('breadcrumbs:menu.life,life');
        $this->middleware('breadcrumbs:menu.cities,life/cities')->only('cities');
        $this->middleware('breadcrumbs:menu.countries,life/countries')->only('countries', 'country');
        $this->middleware('breadcrumbs:menu.gigs,life/gigs')->only('gigs');
    }

    protected function getCity(string $slug) : ?City
    {
        return City::where('slug', $slug)->first();
    }

    protected function getGig(string $slug) : ?Gig
    {
        return Gig::where('slug', $slug)->first();
    }

    protected function getTrip(string $slug) : ?Trip
    {
        return Trip::withCount('photos')
            ->where('slug', $slug)
            ->where('status', Trip::STATUS_PUBLISHED)
            ->first();
    }
}
