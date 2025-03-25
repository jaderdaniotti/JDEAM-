<?php

use App\Http\Controllers\Website;
use App\Http\Controllers\CategoryController;
use App\Models\Game;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jdeam/gestione', [Website::class, 'gestione'])->name('gestione')->middleware('auth');

//rotte edit
Route::get("/categories/{category}/edit", [CategoryController::class, 'edit'])->name('categories.edit');

//rotte post
Route::post("/categories/save", [CategoryController::class, 'store'])->name('categories.store');
Route::post('/games/save', [GameController::class,'store'])->name('games.store');

//rotte delete
Route::delete('/categories/{category}/delete', [CategoryController::class, 'destroy'])->name('categories.destroy');

//rotte update
Route::put('/categories/{category}/update', [CategoryController::class, 'update'])->name('categories.update');
