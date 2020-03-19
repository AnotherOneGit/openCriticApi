<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;

class Game extends Model
{
    public function genre()
    {
        return $this->belongsToMany(Genre::class);
    }
}
