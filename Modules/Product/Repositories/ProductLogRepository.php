<?php

namespace Modules\Product\Repositories;

use Modules\Product\Entities\ProductLog;
use Modules\Product\Interfaces\Repositories\ProductLogRepositoryInterface;

class ProductLogRepository extends FilterRepository implements ProductLogRepositoryInterface
{
    protected $attributes = ['product_id', 'log', 'created_by', 'created_at', 'type'];
    protected $filters = [
        'product_id'    => '=',
        'log'           => 'like',
        'type'          => '=',
        'created_by'    => '=',
        'created_at'    => 'date',
    ];

    public function getBySubjectId($subjectId)
    {
        return ProductLog::where('product_id', $subjectId)->orderBy('id', 'DESC')->paginate(5);   // todo: get config to order
    }

    public function getWithConditions(array $conditions)
    {
        $conditions = $this->refresh($conditions);

        return $this->filter(ProductLog::query(), $conditions)->orderBy('id', 'DESC')->paginate(5); // todo: get config to order
    }
}