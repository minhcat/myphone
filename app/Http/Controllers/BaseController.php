<?php

namespace App\Http\Controllers;

abstract class BaseController extends Controller
{
    public function callAction($method, $parameters)
    {
        return parent::callAction($method, $parameters);
    }
}
