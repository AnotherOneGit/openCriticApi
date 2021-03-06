<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;

class Genre extends Model
{
    protected $fillable = ['id', 'name'];

    public function game(){
        return $this->belongsToMany(Game::class);
    }

    public $timestamps = false;

}
