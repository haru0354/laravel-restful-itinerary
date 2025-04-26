<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\TripController;
use App\Http\Controllers\Dashboard\MemoController;
use App\Http\Controllers\Dashboard\ItineraryController;
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
                Route::post('/', 'store')->name('store');
                Route::get('/{trip_id}', 'show')->name('show');
                Route::get('/{trip_id}/edit', 'edit')->name('edit');
                Route::put('/{trip_id}', 'update')->name('update');
                Route::delete('/{trip_id}', 'destroy')->name('destroy');

                Route::prefix('{trip_id}/itineraries')
                    ->controller(ItineraryController::class)
                    ->name('itineraries.')
                    ->group(function () {
                        // itinerariesの一覧（index）はtripのshowに表示する
                        Route::get('/create', 'create')->name('create');
                        Route::post('/', 'store')->name('store');
                        Route::get('/{itinerary_id}', 'show')->name('show');
                        Route::get('/{itinerary_id}/edit', 'edit')->name('edit');
                        Route::put('/{itinerary_id}', 'update')->name('update');
                        Route::delete('/{itinerary_id}', 'destroy')->name('destroy');
                    });

                Route::prefix('{trip_id}/memos')
                    ->controller(MemoController::class)
                    ->name('memos.')
                    ->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('/create', 'create')->name('create');
                        Route::post('/', 'store')->name('store');
                        Route::get('/{memo_id}', 'show')->name('show');
                        Route::get('/{memo_id}/edit', 'edit')->name('edit');
                        Route::put('/{memo_id}', 'update')->name('update');
                        Route::delete('/{memo_id}', 'destroy')->name('destroy');
                    });
            });
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
