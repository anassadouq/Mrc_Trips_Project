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
Route::get('/trip/hoceima3', function () {
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

// Taghazout
Route::get('/trip/radisson-package-vol', function () {
    return view('voyage.hoceima2');
})->name('voyage.taghazout');

// Reservation
Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');