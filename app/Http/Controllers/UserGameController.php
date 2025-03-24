<?php

namespace App\Http\Controllers;

use App\Models\UserGame;
use App\Http\Requests\StoreUserGameRequest;
use App\Http\Requests\UpdateUserGameRequest;

class UserGameController extends Controller
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
    public function store(StoreUserGameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserGame $userGame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserGame $userGame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserGameRequest $request, UserGame $userGame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserGame $userGame)
    {
        //
    }
}
