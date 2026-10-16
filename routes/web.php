<?php

use App\Http\Controllers\SpeakerController;
use App\Models\Speaker;
use Illuminate\Support\Facades\Route;

// Menu 1: Beranda (Home)
Route::get('/', function () {
    $featuredSpeakers = Speaker::take(3)->get();
    return view('pages.home', compact('featuredSpeakers'));
})->name('home');

// Menu 2: Tentang Kami (About Us) - Profil PT Maja Agung Elektrindo
Route::get('/tentang-kami', function () {
    return view('pages.about');
})->name('about');

// Menu 3: Produk (Katalog Speaker BlackSpider) - TUGAS UTAMA PRAKTIKUM
Route::get('/produk', [SpeakerController::class, 'index'])->name('speakers.index');
Route::get('/produk/{speaker}', [SpeakerController::class, 'show'])->name('speakers.show');

// Menu 4: Kontak (Contact Us)
Route::get('/kontak', function () {
    return view('pages.contact');
})->name('contact');
