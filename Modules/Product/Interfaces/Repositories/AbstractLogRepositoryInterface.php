<?php

namespace Modules\Product\Interfaces\Repositories;

interface AbstractLogRepositoryInterface
{
    public function getBySubjectId($subjectId);
    public function getWithConditions(array $conditions);
}