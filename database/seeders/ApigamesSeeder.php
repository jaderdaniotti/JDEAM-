<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\ApiGame; // Import the ApiGame model

class ApigamesSeeder extends Seeder
{
    public function run(){
        $response = Http::get('https://www.freetogame.com/api/games');
        $data = $response->json();
        foreach ($data as $game) {
            ApiGame::create([
                'game_id' => $game['id'],
                'title' => $game['title'],
                'thumbnail' => $game['thumbnail'],
                'short_description' => $game['short_description'],
                'game_url' => $game['game_url'],
                'genre' => $game['genre'],
                'platform' => $game['platform'],
                'publisher' => $game['publisher'] ?? null, // Usa null se la chiave non esiste
                'developer' => $game['developer'] ?? null, 
                'release_date' => $game['release_date'] ?? null, 
                'freetogame_profile_url' => $game['freetogame_profile_url'] ?? null, 
            ]);
    }
    }
}

