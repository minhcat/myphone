<?php

namespace App\Models\Traits;

trait Loggable
{
    public function getLogInstance()
    {
        return $this->logInstance;
    }

    public function getLogIdColumn()
    {
        return $this->logIdColumn;
    }
}