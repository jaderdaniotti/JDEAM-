<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Apigames extends Controller
{
    public function show($id){
        $apigame = Http::get('https://www.freetogame.com/api/game?id='.$id);
        return view('apigames.show', ['game'=>$apigame->json()]);
    }
}
