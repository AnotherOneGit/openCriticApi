<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Platform;

class Game extends Model
{
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class);
    }

    public function scopeFilter($builder, $filters)
    {
        return $filters->apply($builder);
    }
}
