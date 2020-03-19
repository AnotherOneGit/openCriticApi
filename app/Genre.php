<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;

class Genre extends Model
{
    public function game(){
        return $this->belongsToMany(Game::class);
    }
}
