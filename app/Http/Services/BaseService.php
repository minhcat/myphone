<?php

namespace App\Http\Services;

class BaseService
{
    public function callAction($method, $parameters)
    {
        dump('callAction service');
    }

    public function __call($name, $arguments)
    {
        // dump($name, $arguments);
    }

    public function get()
    {
        // dump('BaseService get');
    }
}