<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use App\Models\ServiceSection;
use App\Models\StatSection;
use App\Models\TestimonialSection;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index', [
            'hero'      => HeroSection::first(),
            'services'  => ServiceSection::orderBy('order')->get(),
            'stats'     => StatSection::orderBy('order')->get(),
            'testimonials' => TestimonialSection::orderBy('order')->get(),
        ]);
    }
}
