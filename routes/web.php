<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\TripController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('dashboard')->middleware(['auth', 'verified'])
    ->name('dashboard.')
    ->group(function () {
        Route::get('/', function () {
            return view('dashboard');
        })->name('index');

        Route::prefix('trips')
            ->controller(TripController::class)
            ->name('trips.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
            });
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
