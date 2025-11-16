<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceSection;

class ServiceController extends Controller
{
    public function index()
    {
        $services = ServiceSection::orderBy('order')->get();

        return view('pages.index', [
            'services' => $services
        ]);    }
}
