<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // your homepage (with login/register)
})->name('home');

/**Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'seller'])->group(function () {
    Route::get('/seller/dashboard', function () {
        return view('seller.dashboard');
    })->name('seller.dashboard');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});**/

Route::get('/dashboard', function () {
    return view('dashboard'); // make sure you have a 'resources/views/dashboard.blade.php'
})->name('dashboard'); 


Route::middleware(['auth'])->group(function () {
    Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('/seller/dashboard', 'seller.dashboard')->name('seller.dashboard');
    Route::view('/user/dashboard', 'user.dashboard')->name('user.dashboard');
});
