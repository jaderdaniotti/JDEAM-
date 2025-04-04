<?php

use App\Models\Apigame;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Games;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories', function(){
    return Category::all();
});

Route::get('/games', function (){
    return Apigame::all();
});