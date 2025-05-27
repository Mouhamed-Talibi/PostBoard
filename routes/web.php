<?php

    use Illuminate\Support\Facades\Route;

    // home page
    Route::get('/', function() { return view('home'); })->name('home');