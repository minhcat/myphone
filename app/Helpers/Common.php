<?php

namespace App\Helpers;

class Common
{
    /**
     * Convert name to slug
     * 
     * @param string name
     * @return string slug
     */
    public static function convertNameToSlug(string $name) : string
    {
        $name = strtolower($name);
        $nameArraySplit = explode(" ", $name);
        return implode("-", $nameArraySplit);
    }
}