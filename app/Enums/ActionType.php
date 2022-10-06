<?php

namespace App\Enums;

final class ActionType
{
    public const CREATE = 1;
    public const UPDATE = 2;
    public const DELETE = 3;
    public const RESTORE = 4;
    public const FORCE_DELETE = 5;

    public static function label($type)
    {
        switch ($type) {
            case self::CREATE:
                return 'create';    // todo: use lang method
            case self::UPDATE:
                return 'update';
            case self::DELETE:
                return 'delete';
            case self::RESTORE:
                return 'restore';
            case self::FORCE_DELETE:
                return 'force_delete';
            default:
                return 'unknown';
        }
    }

    public static function list()
    {
        return [
            self::CREATE        => 'create',
            self::UPDATE        => 'update',
            self::DELETE        => 'delete',
            self::RESTORE       => 'restore',
            // self::FORCE_DELETE  => 'force_delete',
        ];
    }
}