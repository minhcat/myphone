<?php

namespace App\Interfaces;

interface LoggableInterface extends ModelInterface
{
    // todo: what type return

    public function getLogInstance();

    public function getLogIdColumn();

    public function isForceDeleting();

    // public function logText();
}