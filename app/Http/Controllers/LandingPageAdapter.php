<?php

namespace App\Http\Controllers;

class LandingPageAdapter extends Controller
{
    public function __invoke()
    {
        return view('home');
    }
}
