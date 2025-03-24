<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ["name", "price"];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function platforms(){
        return $this->belongsToMany(Platform::class);
    }
    public function players(){
        return $this->belongsToMany(Player::class);
    }
}
