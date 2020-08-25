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
        if ($value == 'true') {
            $this->builder->where('isMajorTitle', true);
        } else {
            $this->builder->where('isMajorTitle', false);
        }
    }

    public function exclusive($value)
    {
        $platformArray = ['Microsoft', 'Sony', 'Nintendo'];
        $platformArrayFiltered = array_values(array_diff($platformArray, [request('exclusive')]));
        if ($value)
        $this->builder->where($platformArrayFiltered[0], 0)
            ->where($platformArrayFiltered[1], 0);
    }

    public function tier($value)
    {
        if ($value)
            $this->builder->where('tier', $value);
    }

    public function score($value)
    {
        if ($value) {
            $this->builder->where('topCriticScore', '>', $value);
        }
    }

    //    public function sort()
    //    {
    //        $this->builder->sortbyDesc('topCriticScore');
    //    }
}
