<?php

namespace Modules\Product\Services;

use Modules\Product\Interfaces\Services\ProductServiceInterface;
use Modules\Product\Interfaces\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductService implements ProductServiceInterface
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function all()
    {
        return $this->productRepository->all();
    }

    public function find($id)
    {
        return $this->productRepository->find($id);
    }

    public function search(Request $request)
    {
        return $this->productRepository->search($request->all());
    }

    public function create(Request $request)
    {
        return $this->productRepository->create($request->all());
    }

    public function update($id, Request $request)
    {
        return $this->productRepository->update($id, $request->all());
    }

    public function delete($id)
    {
        return $this->productRepository->delete($id);
    }
}