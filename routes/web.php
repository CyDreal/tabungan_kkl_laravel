<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Semua role diarahkan ke dashboard mahasiswa
Route::get('/dashboard', fn() => view('mahasiswa.dashboard'))
    ->middleware(['auth', 'verified'])
    ->name('mahasiswa.dashboard');

// Nonaktifkan dashboard untuk panitia/admin/bendahara
// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::prefix('mahasiswa')->middleware(['auth'])->group(function () {
//     Route::get('/dashboard', fn() => view('mahasiswa.dashboard'))
//         ->name('mahasiswa.dashboard');
// });

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';
