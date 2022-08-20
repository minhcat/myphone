<?php

namespace Modules\Product\Repositories;

use Modules\Product\Interfaces\Repositories\ProductRepositoryInterface;
use Modules\Product\Entities\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        $products = Product::all();
        $products = $this->convertDataRaw($products, 20);
        return $products;
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
        return Product::find($id)->update($data);
    }

    public function delete($id)
    {
        return Product::find($id)->delete();
    }

    private function convertDataRaw($products, int $descriptionLength = 10, string $formatDate = 'H:i:s d-m-Y')
    {
        foreach ($products as &$product) {
            $product->description = substr($product->description, 0, $descriptionLength) . '...';
        }
        return $products;
    }
}