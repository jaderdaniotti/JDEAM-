<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;

class Website extends Controller
{
    public function gestione(Category $category, Game $game){
        $categories = Category::all();
        $gamecategories = Category::where("type", 'category')->get();
        $platforms = Category::where('type', 'platform')->get();
        $players = Category::where('type','player')->get();
        $games = Game::all();
        return view('gestione', compact('categories',  'games', 'platforms', 'gamecategories', 'players'));
    }
}
