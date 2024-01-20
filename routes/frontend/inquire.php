<?php

use Illuminate\Support\Facades\Route;

Route::get('/medication-inquire', function () {
    return view('frontend.pages.inquire');
})->name('inquire');
