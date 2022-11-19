<?php

namespace Modules\Product\Repositories;

use Modules\Product\Entities\BrandLog;
use Modules\Product\Interfaces\Repositories\BrandLogRepositoryInterface;

class BrandLogRepository extends FilterRepository implements BrandLogRepositoryInterface
{
    protected $attributes = ['brand_id', 'log', 'created_by', 'created_at', 'type'];
    protected $filters = [
        'brand_id'      => '=',
        'log'           => 'like',
        'type'          => '=',
        'created_by'    => '=',
        'created_at'    => 'date',
    ];

    public function getBySubjectId($subjectId)
    {
        return BrandLog::where('brand_id', $subjectId)->orderBy('id', 'DESC')->paginate(5);   // todo: get config to order
    }

    public function getWithConditions(array $conditions)
    {
        $conditions = $this->refresh($conditions);

        return $this->filter(BrandLog::query(), $conditions)->orderBy('id', 'DESC')->paginate(5); // todo: get config to order
    }
}