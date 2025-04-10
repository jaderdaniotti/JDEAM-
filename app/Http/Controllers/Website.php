<?php

namespace App\Http\Controllers;

use App\Models\Apigame;
use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;
use App\Models\User;


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
    public function index(Category $category, Game $game){

        // $apigames = Http::get('https://www.freetogame.com/api/games');
        $apigames = Apigame::paginate(21);
 
        $categories = Category::all();
        $gamecategories = Category::where("type", 'category')->get();
        $platforms = Category::where('type', 'platform')->get();
        $players = Category::where('type','player')->get();
        $games = Game::all();
        return view('welcome', compact('categories',  'games', 'platforms', 'gamecategories', 'players', 'apigames'));

    }
    public function profile(User $user, $id)
    {
        $user = User::find($id); // Trova l'utente specifico
        $apigames = $user->apigames; // Recupera i giochi relazionati all'utente
        
        return view('profile', compact('user', 'apigames'));
    }
    public function listUser(User $user){
        $users = User::orderBy('created_at', 'desc')->get();
        return view('listUser', compact('users'));
    }
    public function contact(){
        return view('contact');
    }
}
