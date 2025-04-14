<?php

namespace App\Http\Controllers;

use App\Models\Apigame;
use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;
use App\Models\User;

class Apigames extends Controller
{
    public function index(Category $category, Game $game){
        return view('apigames.index');
    }
    public function show($id)
    {
        // Effettua la chiamata API per ottenere i dettagli del gioco
        $apiResponse = Http::get('https://www.freetogame.com/api/game?id=' . $id);
        // Recupera tutti i giochi dal database
        $games = Apigame::all();
    
        // Cerca il gioco corrispondente nel database
        $currentGame = null;
        foreach ($games as $game) {
            if ((string) $game->game_id === (string) $id) { // Confronto come stringhe
                $currentGame = $game;
                break; // Esci dal ciclo una volta trovato il gioco
            }
        }
        // Passa i dati alla vista
        return view('apigames.show', [
            'currentGame' => $currentGame,
            'game' => $apiResponse->json(),
        ]);
    }
}

