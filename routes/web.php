<?php

use App\Http\Controllers\Website;
use App\Http\Controllers\CategoryController;
use App\Models\Platform;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PlatformController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jdeam/gestione', [Website::class, 'gestione'])->name('gestione')->middleware('auth');

Route::post("/categories/save", [CategoryController::class, 'store'])->name('categories.store');
Route::post("/platforms/save", [PlatformController::class, 'store'])->name('platforms.store');
Route::post("/players/save", [PlayerController::class, 'store'])->name('players.store');
