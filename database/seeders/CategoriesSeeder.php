<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryNames = [
            'mmorpg' ,
            'shooter',
            'strategy' ,
            'moba' ,
            'racing' ,
            'sports' ,
            'social' ,
            'sandbox' ,
            'open-world' ,
            'survival' ,
            'pvp' ,
            'pve' ,
            'pixel' ,
            'voxel' ,
            'zombie' ,
            'turn-based' ,
            'first-person' ,
            'third-Person' ,
            'top-down' ,
            'tank',
            'space' ,
            'sailing' ,
            'side-scroller' ,
            'superhero' ,
            'permadeath' ,
            'card' ,
            'battle-royale',
            'mmo' ,
            'mmofps' ,
            'mmotps',
            '3d' ,
            '2d' ,
            'anime' ,
            'fantasy' ,
            'sci-fi',
            'fighting' ,
            'action-rpg' ,
            'action' ,
            'military' ,
            'martial-arts' ,
            'flight' ,
            'low-spec',
            'tower-defense' ,
            'horror',
            'mmorts',
        ];
        foreach ($categoryNames as $name) {
            Category::create([
                'name' => $name,
                'type' => 'category',
            ]);
        }
    }
}
