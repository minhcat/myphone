<?php

namespace Modules\Product\Services;

use Modules\Product\Interfaces\Services\ProductServiceInterface;
use Modules\Product\Interfaces\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;
use App\Helpers\Common;

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
        $data = $this->generateData($request->all());

        return $this->productRepository->create($data);
    }

    public function update($id, Request $request)
    {
        $data = $this->generateData($request->all());

        return $this->productRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->productRepository->delete($id);
    }

    /**
     * Make data array to create or update from request data
     * 
     * @param array $request
     * @return array $data
     */
    private function generateData(array $request) : array
    {
        $data = $request;

        // generate slug
        if (isset($request['name']) && is_string($request['name'])) {
            $data['slug'] = Common::convertNameToSlug($request['name']);
        }

        // check null description
        if (is_null($request['description'])) {
            $data['description'] = '';
        }

        if (!isset($request['created_by'])) {
            $data['created_by'] = 1;
        }

        return $data;
    }
}