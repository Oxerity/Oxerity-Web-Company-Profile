<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/layanan/web-umkm', function () {
    return view('pages.services.web-umkm', ['title' => 'Layanan Web UMKM - Oxerity Corp']);
})->name('services.web-umkm');

Route::get('/layanan/e-commerce', function () {
    return view('pages.services.e-commerce', ['title' => 'Layanan E-Commerce - Oxerity Corp']);
})->name('services.e-commerce');

Route::get('/layanan/mobile-apps', function () {
    return view('pages.services.mobile-apps', ['title' => 'Layanan Mobile Apps - Oxerity Corp']);
})->name('services.mobile-apps');

Route::get('/layanan/seo-sem', function () {
    return view('pages.services.seo-sem', ['title' => 'Layanan SEO & SEM - Oxerity Corp']);
})->name('services.seo-sem');

Route::get('/tentang/visi-misi', function () {
    return view('pages.about.visi-misi', ['title' => 'Visi & Misi - Oxerity Corp']);
})->name('about.visi-misi');

Route::get('/tentang/tim-kami', function () {
    return view('pages.about.tim-kami', ['title' => 'Tim Kami - Oxerity Corp']);
})->name('about.tim-kami');

Route::get('/tentang/karir', function () {
    return view('pages.about.karir', ['title' => 'Karir - Oxerity Corp']);
})->name('about.karir');

// Portfolio Routes
Route::get('/portfolio/culinary', function () {
    return view('pages.portfolio.culinary', ['title' => 'Portfolio Culinary & F&B - Oxerity Corp']);
})->name('portfolio.culinary');

Route::get('/portfolio/fashion', function () {
    return view('pages.portfolio.fashion', ['title' => 'Portfolio Fashion & Retail - Oxerity Corp']);
})->name('portfolio.fashion');

Route::get('/portfolio/corporate', function () {
    return view('pages.portfolio.corporate', ['title' => 'Portfolio Corporate & B2B - Oxerity Corp']);
})->name('portfolio.corporate');

// Pricing Route
Route::get('/harga', function () {
    return view('pages.pricing.index', ['title' => 'Paket Harga - Oxerity Corp']);
})->name('pricing.index');

// Contact Route
Route::get('/kontak', function () {
    return view('pages.contact.index', ['title' => 'Hubungi Kami - Oxerity Corp']);
})->name('contact.index');

// Education Routes
Route::get('/edukasi/blog', function () {
    return view('pages.education.blog', ['title' => 'Blog & Artikel - Oxerity Corp']);
})->name('education.blog');

Route::get('/edukasi/webinar', function () {
    return view('pages.education.webinar', ['title' => 'Webinar UMKM - Oxerity Corp']);
})->name('education.webinar');

Route::get('/edukasi/e-book', function () {
    return view('pages.education.ebook', ['title' => 'E-Book Gratis - Oxerity Corp']);
})->name('education.ebook');

// Support Routes
Route::get('/bantuan/pusat-bantuan', function () {
    return view('pages.support.help-center', ['title' => 'Pusat Bantuan - Oxerity Corp']);
})->name('support.help-center');

Route::get('/bantuan/faq', function () {
    return view('pages.support.faq', ['title' => 'FAQ - Oxerity Corp']);
})->name('support.faq');

Route::get('/bantuan/syarat-ketentuan', function () {
    return view('pages.support.terms', ['title' => 'Syarat & Ketentuan - Oxerity Corp']);
})->name('support.terms');







