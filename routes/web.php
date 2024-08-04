<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('landing_page.landing');
});

Route::get('/landing_page', function () {
    return view('landing_page.landing');
})->name('landing_page.landing');

// Dakhla
Route::get('/trip/dakhla-road-trip', function () {
    return view('voyage.dakhla');
})->name('voyage.dakhla');

// Hoceima
Route::get('/trip/radisson-blu-package', function () {
    return view('voyage.hoceima3');
})->name('voyage.hoceima3');

// Saidia
Route::get('/trip/saidia-hoceima-5stars', function () {
    return view('voyage.saidia');
})->name('voyage.saidia');

// Taghazout
Route::get('/trip/taghazout-white-beach', function () {
    return view('voyage.taghazout');
})->name('voyage.taghazout');

// Hoceima vol
Route::get('/trip/radisson-package-vol', function () {
    return view('voyage.hoceima2');
})->name('voyage.hoceima2');

// Egypt
Route::get('/trip/egypt-classic-5-tour', function () {
    return view('voyage.egypt');
})->name('voyage.egypt');

// Antalya
Route::get('/trip/antalya-istanbul-summer-2024', function () {
    return view('voyage.antalya');
})->name('voyage.antalya');

// Hoceima vol
Route::get('/trip/dubai-istanbul-summer-trip', function () {
    return view('voyage.dubai');
})->name('voyage.dubai');

// Hoceima vol
Route::get('/trip/istanbul-magical-holiday-summer-2024', function () {
    return view('voyage.istanbul');
})->name('voyage.istanbul');
// Reservation
Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');