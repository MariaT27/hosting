<?php namespace App\Traits;

use Illuminate\Database\Eloquent\Collection;

trait HasTripsMetaDescription
{
    public function metaDescription(Collection $trips): string
    {
        if (!$total_trips = $trips->count()) {
            return '';
        }

        $trips_text = \ViewHelper::plural('trips', $total_trips);
        $total_photos = $trips->sum->photos_count;

        if (!$total_photos) {
            return $trips_text;
        }

        $photos_text = \ViewHelper::plural('photos', $total_photos);

        return "{$trips_text} &middot; {$photos_text}";
    }
}