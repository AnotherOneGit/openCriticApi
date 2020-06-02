<?php

namespace App;

class GamesFilter
{
    protected $builder;
    protected $request;

    public function __construct($builder, $request)
    {
        $this->builder = $builder;
        $this->request = $request;
    }

    public function apply()
    {
        foreach ($this->filters() as $filter => $value) {
            if (method_exists($this, $filter)) {
                $this->$filter($value);
            }
        }
        return $this->builder;
    }

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

    public function filters()
    {
        return $this->request->all();
    }
}
