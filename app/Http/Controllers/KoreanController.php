<?php namespace App\Http\Controllers;

class KoreanController extends Controller
{
    public function __invoke()
    {
        return view('korean.index');
    }
}
