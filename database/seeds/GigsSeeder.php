<?php

use Illuminate\Database\Seeder;

class GigsSeeder extends Seeder
{
    public function run()
    {
        $cityIds = App\City::get(['id'])->pluck('id');

        // Для каждого шаблона нужно создать концерт
        foreach (App\Gig::templatesIterator() as $template) {
            $slug = str_replace('_', '.', $template->getBasename('.blade.php'));
            $artistSlug = Str::before($slug, '.');

            if (null === $artist = App\Artist::where('slug', $artistSlug)->first()) {
                continue;
            }

            factory(App\Gig::class)->create([
                'slug' => $slug,
                'city_id' => $cityIds->random(),
                'title_en' => $artist->title,
                'title_ru' => $artist->title,
                'artist_id' => $artist->id,
            ]);
        }
    }
}
