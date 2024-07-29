<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('slider.slider');
});

// Dakhla
Route::get('/Dakhla_Road_Trip_Best_Program_Morocco', function () {
    return view('voyages/Dekhla.detail');
});

// Taghazout
Route::get('/Taghazout_White_Beach_Resort', function () {
    return view('voyages/Taghazout.detail');
});

// Hoceima 3
Route::get('/Radisson_Blu_Al_Hoceima_5*_Premium_Package', function () {
    return view('voyages/Hoceima3.detail');
});

// Saidia
Route::get('/Dreamy_5*_Destination', function () {
    return view('voyages/Saidia.detail');
});

// Hoceima 2
Route::get('/Radisson_Blu_Al_Hoceima_5*_Premium_Package_par_Vol', function () {
    return view('voyages/Hoceima2.detail');
});
Route::get('/slider', function () {
    return view('slider.slider');
});