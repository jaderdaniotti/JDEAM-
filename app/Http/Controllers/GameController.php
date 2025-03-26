<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Category;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $game = Game::create([
            'name' => $request->name,
            'price' => $request->price,
            'year' => $request->year,
            'image' => $path_image,
        ]);
        $game->categories()->detach();
        $game->categories()->attach($request->categories);
        return to_route('gestione');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return to_route('gestione');
    }
}