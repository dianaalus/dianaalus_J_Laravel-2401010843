<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

Route::get('/', [DestinationController::class, 'home'])->name('home');
Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations');
Route::get('/destination/{id}', [DestinationController::class, 'show'])->name('destination.show');
Route::get('/booking', [DestinationController::class, 'Booking'])->name('booking');
Route::get('/recommendations', [DestinationController::class, 'recommendations'])->name('recommendations');
