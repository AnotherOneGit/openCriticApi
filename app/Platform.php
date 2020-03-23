<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;

class Platform extends Model
{
    public function path()
    {
        return route('platform.show', $this);
    }

    public function game()
    {
        return $this->belongsToMany(Game::class);
    }
}
