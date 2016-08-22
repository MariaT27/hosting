<?php namespace App\Http\Controllers;

use App;
use App\City;
use App\Country;
use App\Trip;
use Breadcrumbs;

class Life extends Controller
{
    public function index()
    {
        $trips = Trip::orderBy('date_start', 'desc')->get();

        return view($this->view, compact('trips'));
    }

    public function cities()
    {
        $locale = App::getLocale();
        $cities = City::with('tripsCount')->orderBy("title_{$locale}")->get();

        Breadcrumbs::push(trans('menu.life'), 'life');
        Breadcrumbs::push(trans('menu.cities'));

        return view($this->view, compact('cities'));
    }

    public function city(City $city)
    {
        Breadcrumbs::push(trans('menu.countries'), 'life/countries');
        Breadcrumbs::push($city->country->title, "life/countries/{$city->country->slug}");
        Breadcrumbs::push($city->title);

        return view('life.city', compact('city'));
    }

    public function countries()
    {
        $locale = App::getLocale();
        $countries = Country::with('cities')->orderBy("title_{$locale}", 'asc')->get();

        Breadcrumbs::push(trans('menu.life'), 'life');
        Breadcrumbs::push(trans('menu.countries'));

        return view($this->view, compact('countries'));
    }

    public function country($slug)
    {
        $country = Country::with('cities')->where('slug', $slug)->firstOrFail();
        $trips = Trip::whereIn('city_id', $country->cities->pluck('id'))
            ->orderBy('date_start', 'desc')
            ->get();

        Breadcrumbs::push(trans('menu.life'), 'life');
        Breadcrumbs::push(trans('menu.countries'), 'life/countries');
        Breadcrumbs::push($country->title, "life/countries/{$country->slug}");

        return view($this->view, compact('country', 'trips'));
    }

    public function page($page)
    {
        Breadcrumbs::push(trans('menu.life'), 'life');

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

        abort(404);
    }

    public function trip(Trip $trip)
    {
        $tpl = "life.trips.{$trip->tpl}";

        if (!view()->exists($tpl)) {
            abort(404);
        }

        Breadcrumbs::push(trans('menu.countries'), "life/countries");
        Breadcrumbs::push($trip->city->country->title, "life/countries/{$trip->city->country->slug}");
        Breadcrumbs::push($trip->city->title, "life/{$trip->city->slug}");
        Breadcrumbs::push($trip->getLocalizedDate(), "life/{$trip->slug}");

        $next_trips = $trip->next()->get();
        $previous_trips = $trip->previous($next_trips->count())->get()->reverse();

        return view($tpl, compact('next_trips', 'previous_trips', 'trip'));
    }

    protected function getCity($slug)
    {
        return City::where('slug', $slug)->first();
    }

    protected function getTrip($slug)
    {
        return Trip::where('slug', $slug)
            ->where('published', 1)
            ->first();
    }
}
