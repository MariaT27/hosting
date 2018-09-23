<?php namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

/**
 * @mixin \App\Vocabulary
 */
class Vocabulary extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'kana' => $this->kana,
            'audio' => $this->audioMp3(),
            'level' => $this->level,
            'burned' => $this->relationLoaded('burnable') ? null !== $this->burnable : false,
            'meaning' => $this->meaning,
            'character' => $this->character,
            'sentences' => $this->sentences,
        ];
    }
}