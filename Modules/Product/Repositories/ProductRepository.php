<?php

namespace Modules\Product\Repositories;

use Modules\Product\Interfaces\Repositories\ProductRepositoryInterface;
use Modules\Product\Entities\Product;

class ProductRepository extends FilterRepository implements ProductRepositoryInterface
{
    protected $attributes = ['name', 'brand_id', 'is_show', 'is_lock', 'created_by', 'created_at', 'trashed'];
    protected $filters = [
        'name'          => 'like',
        'brand_id'      => '=',
        'is_show'       => '=',
        'is_lock'       => '=',
        'created_by'    => '=',
        'created_at'    => 'daterange',
    ];

    public function all()
    {
        $products = Product::paginate(5);   // todo: set config to value paginate
        $products = $this->convertDataRaw($products, 20);
        return $products;
    }

    public function find($id)
    {
        return Product::findOrFail($id);
    }

    public function search(array $data)
    {
        $data = $this->refresh($data);

        return $this->filter(Product::query(), $data)->paginate(5);
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

    public function update($id, array $data)
    {
        return Product::find($id)->update($data);
    }

    public function delete($id)
    {
        return Product::find($id)->delete();
    }

    public function restore($id)
    {
        return Product::withTrashed()->find($id)->restore();
    }

    public function forceDelete($id)
    {
        return Product::find($id)->forceDelete();
    }

    private function convertDataRaw($products, int $descriptionLength = 10)
    {
        foreach ($products as &$product) {
            $product->description = substr($product->description, 0, $descriptionLength) . '...';
        }
        return $products;
    }
}