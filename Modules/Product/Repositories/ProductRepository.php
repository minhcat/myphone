<?php

namespace Modules\Product\Repositories;

use Modules\Product\Interfaces\Repositories\ProductRepositoryInterface;
use Modules\Product\Entities\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        return Product::all();
    }

    public function find($id)
    {
        return Product::findOrFail($id);
    }

    public function search(array $data)
    {
        return Product::where($data)->get();
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

    public function update($id, array $data)
    {
        return Product::whereId($id)->update($data);
    }

    public function delete($id)
    {
        return Product::whereId($id)->delete();
    }
}