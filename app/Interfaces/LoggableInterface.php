<?php

namespace App\Interfaces;

interface LoggableInterface
{
    public function getLogInstance();

    public function getLogIdColumn();

    // public function logText();
}