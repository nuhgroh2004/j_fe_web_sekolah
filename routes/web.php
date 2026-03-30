<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => view('pages.home'))->name('home');
Route::get('/about', fn () => view('pages.about'))->name('about');
Route::get('/academics', fn () => view('pages.academics'))->name('academics');
Route::get('/news', fn () => view('pages.news'))->name('news');
Route::get('/gallery', fn () => view('pages.gallery'))->name('gallery');
Route::get('/contact', fn () => view('pages.contact'))->name('contact');
