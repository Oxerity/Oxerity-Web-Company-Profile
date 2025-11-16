<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use App\Models\ServiceSection;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index', [
            'hero'      => HeroSection::first(),
            'services'  => ServiceSection::orderBy('order')->get(),
        ]);
    }
}
