<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ["name", "price", "image", "year"];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

}
