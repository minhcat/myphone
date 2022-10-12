<?php

namespace App\Enums;

final class ShowState
{
    public const SHOW = true;
    public const HIDE = false;

    public static function label($state)
    {
        switch ($state) {
            case self::SHOW:
                return 'lock';  // todo: use lang method
            case self::HIDE:
                return 'unlock';
            default:
                return 'unknown';
        }
    }

    public static function list()
    {
        return [
            self::SHOW  => 'show',
            self::HIDE  => 'hide'
        ];
    }
}