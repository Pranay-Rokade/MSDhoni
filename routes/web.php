<?php

use Illuminate\Support\Facades\Route;

Route::view("/", 'home')->name('home');
Route::view("/about", 'about')->name('about');
Route::view("/history", 'history')->name('history');
Route::view("/achievements", 'achievements')->name('achievements');
Route::view("/contact", 'contact')->name('contact');
