<?php

namespace Modules\Product\Repositories;

use Modules\Product\Entities\Brand;
use Modules\Product\Interfaces\Repositories\BrandRepositoryInterface;

class BrandRepository extends FilterRepository implements BrandRepositoryInterface
{
    protected $attributes = ['name', 'is_show', 'is_lock', 'created_by', 'created_at'];
    protected $filters = [
        'name'          => 'like',
        'is_show'       => '=',
        'is_lock'       => '=',
        'created_by'    => '=',
        'created_at'    => 'date',
    ];

    public function all()
    {
        $brands = Brand::paginate(5);   // todo: set config to value paginate

        return $brands;
    }

    public function find($id)
    {
        return Brand::findOrFail($id);
    }

    public function search(array $data)
    {
        // $data = $this->refresh($data);

        // return $this->filter(Product::query(), $data)->paginate(5);
    }

    public function create(array $data)
    {
        return Brand::create($data);
    }

    public function update($id, array $data)
    {
        return Brand::find($id)->update($data);
    }

    public function delete($id)
    {
        return Brand::find($id)->delete();
    }

    public function forceDelete($id)
    {
        return Brand::find($id)->forceDelete();
    }
}