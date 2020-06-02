<?php

namespace App;

class GamesFilter extends QueryFilter
{
    public function name($value)
    {
        $this->builder->where('name', 'like', "%$value%");
    }

    public function is_major($value)
    {
        $this->builder->where('isMajorTitle', $value);
    }

    public function exclusive($value)
    {
        $platformArray = ['Microsoft', 'Sony', 'Nintendo'];
        $platformArrayFiltered = array_values(array_diff($platformArray, [request('exclusive')]));
        $this->builder->where($platformArrayFiltered[0], 0)
            ->where($platformArrayFiltered[1], 0);
    }

    public function tier($value)
    {
        $this->builder->where('tier', $value);
    }

    public function score($value)
    {
        if ($value) {
            $this->builder->where('topCriticScore', '>', $value);
        }
    }
}
