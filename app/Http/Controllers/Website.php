<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Models\Platform;
use App\Models\Player;
use Illuminate\Http\Request;

class Website extends Controller
{
    public function gestione(Category $category, Player $player, Platform $platform, Game $game){
        return view('gestione', compact('category', 'player', 'platform', 'game'));
    }
}
