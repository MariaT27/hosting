<?php namespace App\Services;

class HangulCyrrilizer
{
    const DICTIONARY = [
        'ㅂ' => ['п-', '-б-', '-п'],
        'ㅈ' => ['ч', '-дж-', '-т'],
        'ㄷ' => ['т-', '-д-', '-т'],
        'ㄱ' => ['к-', '-г-', '-к'],
        'ㅅ' => ['с', '-т'],
        'ㅁ' => ['м'],
        'ㄴ' => ['н'],
        'ㅇ' => ['-н'],
        'ㄹ' => ['-р-', '-ль'],
        'ㅎ' => ['х'],
        'ㅋ' => ['кх', '-к'],
        'ㅌ' => ['тх', '-т'],
        'ㅊ' => ['чх', '-т'],
        'ㅍ' => ['пх', '-п'],

        'ㅛ' => ['ё'],
        'ㅕ' => ['ё'],
        'ㅑ' => ['я'],
        'ㅐ' => ['э'],
        'ㅔ' => ['е'],
        'ㅗ' => ['о'],
        'ㅓ' => ['о'],
        'ㅏ' => ['а'],
        'ㅣ' => ['и'],
        'ㅠ' => ['ю'],
        'ㅜ' => ['у'],
        'ㅡ' => ['ы'],

        'ㅚ' => ['ве'],
        'ㅟ' => ['ви'],
        'ㅝ' => ['во'],
        'ㅙ' => ['вэ'],
        'ㅞ' => ['ве'],
        'ㅢ' => ['ый', '-и', '-е'],
        'ㅘ' => ['ва'],
    ];
}
