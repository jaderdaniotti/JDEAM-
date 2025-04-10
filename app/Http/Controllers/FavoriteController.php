<?php

namespace App\Http\Controllers;

use App\Models\Apigame;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function toggle(Apigame $apigame, User $user)
    {
        $user = auth()->user();
        $user->apigames()->attach($apigame->id);
        return back();
    }
    public function destroy(Apigame $apigame, User $user)
    {
        $user = auth()->user();
        $user->apigames()->detach($apigame->id);
        return back();
    }
}
