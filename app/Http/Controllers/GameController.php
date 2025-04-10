<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;
use App\Models\User;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category, Game $game){

        $categories = Category::all();
        $gamecategories = Category::where("type", 'category')->get();
        $platforms = Category::where('type', 'platform')->get();
        $players = Category::where('type','player')->get();
        $games = Game::all();
        return view('games.index', compact('categories',  'games', 'platforms', 'gamecategories', 'players'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        
        if ($request->hasFile('image')) {
            $path_image = $request->file('image')->store('covers', 'public');
        }
        $game = Game::create([
            'name' => $request->name,
            'price' => $request->price,
            'year' => $request->year,
            'image' => $path_image,
        ]);
        $game->categories()->attach($request->categories);
        return to_route('gestione');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {

        $categories = Category::all();
        $gamecategories = Category::where("type", 'category')->get();
        $platforms = Category::where('type', 'platform')->get();
        $players = Category::where('type','player')->get();
        return view('games.edit', compact('game', 'gamecategories', 'platforms', 'players', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        $path_image = 'image';
        if ($request->hasFile('image')) {
            $path_image = $request->file('image')->store('covers', 'public');
        }
        $game->update([
            'name' => $request->name,
            'price' => $request->price,
            'year' => $request->year,
            'image' => $path_image,
        ]);
        $game->categories()->sync($request->categories);
        $game->categories()->attach($request->categories);
        return to_route('gestione');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->categories()->detach();
        $game->delete();
        return to_route('gestione');
    }
}