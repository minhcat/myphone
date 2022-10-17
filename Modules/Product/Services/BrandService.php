<?php

namespace Modules\Product\Services;

use Illuminate\Http\Request;
use Modules\Product\Interfaces\Repositories\BrandRepositoryInterface;
use Modules\Product\Interfaces\Services\BrandServiceInterface;

class BrandService implements BrandServiceInterface
{
    protected $brandRepository;

    public function __construct(BrandRepositoryInterface $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    public function all()
    {
        return $this->brandRepository->all();
    }

    public function find($id)
    {

    }

    public function search(Request $request)
    {

    }

    public function create(Request $request)
    {

    }

    public function update($id, Request $request)
    {

    }

    public function delete($id)
    {

    }

    public function forceDelete($id)
    {

    }

    public function getLogs($id, Request $request = null)
    {

    }
}