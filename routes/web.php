<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Testing Reuse Navbar & Footer
Route::get('/test', function () {
    return view('test');
});

Route::get('/homeindex', function () { return view('homeindex'); });
Route::get('/productpg', function () { return view('productpg'); });
Route::get('/aboutus', function () { return view('aboutus'); });
Route::get('/artisanpg', function () { return view('artisanpg'); });
Route::get('/contactus', function () { return view('contactus'); });

Route::get('/cart', function () { return view('cart'); });

/*Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
