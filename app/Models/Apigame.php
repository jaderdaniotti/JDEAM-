<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apigame extends Model
{
    // protected $table = 'api_games';
    protected $fillable = [
        'game_id',
        'title',
        'thumbnail',
        'short_description',
        'game_url',
        'genre',
        'platform',
        'publisher',
        'developer',
        'release_date',
        'freetogame_profile_url',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
