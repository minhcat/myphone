<?php

namespace App\Helpers;

class Common
{
    /**
     * Make data array to create or update from request data
     * 
     * @param array $request
     * @return array $data
     */
    public static function generateDataFromRequest(array $request) : array
    {
        $data = $request;
        $data['slug'] = self::convertNameToSlug($request['name']);

        return $data;
    }

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