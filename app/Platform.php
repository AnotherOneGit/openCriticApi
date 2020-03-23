<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    public function path()
    {
        return route('platform.show', $this);
    }
}
