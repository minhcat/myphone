<?php

namespace App\Enums;

final class LockState
{
    public const LOCK = true;
    public const UNLOCK = false;

    public static function label($state)
    {
        switch ($state) {
            case self::LOCK:
                return 'lock';  // todo: use lang method
            case self::UNLOCK:
                return 'unlock';
            default:
                return 'unknown';
        }
    }

    public static function list()
    {
        return [
            self::LOCK      => 'lock',
            self::UNLOCK    => 'unlock'
        ];
    }
}