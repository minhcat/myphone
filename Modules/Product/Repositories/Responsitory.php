<?php

namespace Modules\Product\Repositories;

use Illuminate\Support\Arr;

abstract class Responsitory
{
    protected $attributes = [];
    protected $filters = [];

    protected function refresh($data)
    {
        $data = Arr::only($data, $this->attributes);
        foreach ($data as $attribute => &$value) {
            if ($this->filters[$attribute] == 'date' && is_array($value) && count($value) == 2 && !in_array(null, $value)) {
                $value[0] = date('Y-m-d', strtotime($value[0]));
                $value[1] = date('Y-m-d', strtotime($value[1]));
            }
        }
        return Arr::whereNotNull($data);
    }

    protected function filter($query, $data)
    {
        foreach ($this->attributes as $attribute) {
            if (isset($data[$attribute])) {
                if ($this->filters[$attribute] == 'date') {
                    if (!in_array(null, $data['created_at'])) {
                        $query->whereBetween($attribute, $data[$attribute]);
                    }
                } else if ($this->filters[$attribute] == 'like') {
                    $query->where($attribute, $this->filters[$attribute], '%'.$data[$attribute].'%');
                } else {
                    $query->where($attribute, $this->filters[$attribute], $data[$attribute]);
                }
            }
        }
        return $query;
    }
}