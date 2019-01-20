<?php

use Illuminate\Database\Seeder;

class RadicalSeeder extends Seeder
{
    const RADICALS = [
        [
            'level' => 1,
            'meaning' => 'ground',
            'character' => '一',
        ], [
            'level' => 1,
            'meaning' => 'fins',
            'character' => 'ハ',
        ], [
            'level' => 1,
            'meaning' => 'drop',
            'character' => '丶',
        ], [
            'level' => 1,
            'image' => 'https://cdn.wanikani.com/subjects/images/8762-gun-large.png',
            'meaning' => 'gun',
            'character' => '',
        ], [
            'level' => 2,
            'meaning' => 'moon',
            'character' => '月',
        ],
    ];

    public function run()
    {
        foreach (self::RADICALS as $radical) {
            factory(App\Radical::class)->create($radical);
        }
    }
}