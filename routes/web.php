<?php

use App\Http\Controllers\Apigames;
use App\Http\Controllers\Website;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Models\Game;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

//viste
Route::get('/', [Website::class,'index'])->name('home');
// Route::get('/games', [GameController::class,'index'])->name('games.index');
Route::get('/apigames', [Apigames::class,'index'])->name('apigames.index');
Route::get('/jdeam/gestione', [Website::class, 'gestione'])->name('gestione')->middleware('auth');
Route::get('/dettaglio/{id}', [Apigames::class, 'show']);
Route::get('/profile/{id}',[Website::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/listUsers', [Website::class, 'listUser'])->name('listUsers')->middleware('auth');
Route::get('/contact', [Website::class, 'contact'])->name('contact');
Route::get('/info', [Website::class, 'info'])->name('info');


//rotte edit
Route::get("/categories/{category}/edit", [CategoryController::class, 'edit'])->name('categories.edit')->middleware('auth');
// Route::get("/games/{game}/edit", [GameController::class,"edit"])->name("games.edit")->middleware('auth');

//rotte post
Route::post("/categories/save", [CategoryController::class, 'store'])->name('categories.store')->middleware('verified');
// Route::post('/games/save', [GameController::class,'store'])->name('games.store')->middleware('verified');
Route::post('/favorites/{apigame}', [FavoriteController::class, 'toggle'])->name('favorites.toggle')->middleware('auth')->middleware('verified');
Route::post("/sendMail", [Website::class, 'sendEmail'])->name('sendMail');

//rotte delete
Route::delete('/categories/{category}/delete', [CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('verified');
// Route::delete('/games/{game}/delete', [GameController::class, 'destroy'])->name('games.destroy')->middleware('verified');
Route::delete('/favorites/{apigame}', [FavoriteController::class, 'destroy'])->name('favorites.destroy')->middleware('auth');

//rotte update
Route::put('/categories/{category}/update', [CategoryController::class, 'update'])->name('categories.update')->middleware('verified');
// Route::put('/games/{game}/update', [GameController::class, 'update'])->name('games.update')->middleware('verified');


