<?php

namespace Modules\Product\Repositories;

use Illuminate\Support\Arr;

abstract class FilterRepository // todo: refactor to trait
{
    protected $attributes = [];
    protected $filters = [];

    protected function refresh($data)
    {
        $data = Arr::only($data, $this->attributes);
        foreach ($data as $attribute => &$value) {
            if ($attribute == 'trashed') {
                $value = $value === 'on' ? true : false;
                continue;
            } else if ($this->filters[$attribute] == 'date'
            && is_array($value)
            && count($value) == 2
            && !in_array(null, $value)) {
                $value[0] = str_replace("/", "-", $value[0]);
                $value[1] = str_replace("/", "-", $value[1]);
                $value[0] = date('Y-m-d', strtotime($value[0])).' 00:00:00';
                $value[1] = date('Y-m-d', strtotime($value[1])).' 23:59:59';
            } else if ($this->filters[$attribute] == 'daterange' && !is_null($value)) {
                $daterange = explode("-", $value);
                $daterange[0] = str_replace("/", "-", $daterange[0]);
                $daterange[1] = str_replace("/", "-", $daterange[1]);
                $daterange[0] = date('Y-m-d', strtotime($daterange[0])).' 00:00:00';
                $daterange[1] = date('Y-m-d', strtotime($daterange[1])).' 23:59:59';
                $value = $daterange;
            }
        }
        return Arr::whereNotNull($data);
    }

    protected function filter($query, $data)
    {
        foreach ($this->attributes as $attribute) {
            if (isset($data[$attribute])) {
                if ($attribute == 'trashed') {
                    if ($data[$attribute]) {
                        $query->onlyTrashed();
                    }
                    continue;
                } else if (optional($this->filters)[$attribute] == 'date') {
                    if (!in_array(null, $data[$attribute])) {
                        $query->whereBetween($attribute, $data[$attribute]);
                    }
                } else if (optional($this->filters)[$attribute] == 'daterange') {
                    $query->whereBetween($attribute, $data[$attribute]);
                } else if (optional($this->filters)[$attribute] == 'like') {
                    $query->where($attribute, $this->filters[$attribute], '%'.$data[$attribute].'%');
                } else {
                    $query->where($attribute, $this->filters[$attribute], $data[$attribute]);
                }
            }
        }
        return $query;
    }
}