<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('home', function () {
    return "Ini adalah halaman home";
});

Route::get('/profil', function () {
    return "Ini adalah halaman profil";
});

Route::get('contact', function () {
    return "Ini adalah halaman contact";
});

Route::get('produk', function () {
    return "Ini adalah halaman produk";
});

Route::get('keranjang', function () {
    return "Ini adalah halaman keranjang";
});

Route::get('checkout', function () {
    return "Ini adalah halaman checkout";
});

Route::get('ulasan', function () {
    return "Ini adalah halaman ulasan";
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';