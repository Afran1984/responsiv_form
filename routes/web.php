<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('home-sections.about');
})->name('about');


Route::get('/service', function () {
    return view('home-sections.service');
})->name('service');

// Route::get('/service', function () {
//     return view('home-section.service')
// })->name('service');

// Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/regform', [ProfileController::class, 'create'])->name('profiles.create');
Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');
Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');

