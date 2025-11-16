<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/', [ServiceController::class, 'index']);
