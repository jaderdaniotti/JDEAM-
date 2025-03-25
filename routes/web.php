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

//rotte edit
Route::get("/categories/{category}/edit", [CategoryController::class, 'edit'])->name('categories.edit');
Route::get("/platforms/{platform}/edit", [PlatformController::class, 'edit'])->name('platforms.edit');
Route::get("/players/{player}/edit", [PlayerController::class, 'edit'])->name('players.edit');

//rotte post
Route::post("/categories/save", [CategoryController::class, 'store'])->name('categories.store');
Route::post("/platforms/save", [PlatformController::class, 'store'])->name('platforms.store');
Route::post("/players/save", [PlayerController::class, 'store'])->name('players.store');

//rotte delete
Route::delete('/categories/{category}/delete', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::delete('/platforms/{platform}/delete', [PlatformController::class, 'destroy'])->name('platforms.destroy');
Route::delete('/players/{player}/delete', [PlayerController::class, 'destroy'])->name('players.destroy');

//rotte update
Route::put('/categories/{category}/update', [CategoryController::class, 'update'])->name('categories.update');
Route::put('/platforms/{platform}/update', [PlatformController::class, 'update'])->name('platforms.update');
Route::put('/players/{player}/update', [PlayerController::class, 'update'])->name('players.update');

