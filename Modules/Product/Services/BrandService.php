<?php

namespace Modules\Product\Services;

use App\Helpers\Common;
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
        return $this->brandRepository->find($id);
    }

    public function search(Request $request)
    {
        return $this->brandRepository->search($request->all());
    }

    public function create(Request $request)
    {
        $data = $this->generateData($request->all());

        return $this->brandRepository->create($data);
    }

    public function update($id, Request $request)
    {
        $data = $this->generateData($request->all());

        return $this->brandRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->brandRepository->delete($id);
    }

    public function forceDelete($id)
    {
        return $this->brandRepository->forceDelete($id);
    }

    public function getLogs($id, Request $request = null)
    {

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
        if (!isset($request['description']) || is_null($request['description'])) {
            $data['description'] = '';
        }

        if (!isset($request['created_by'])) {
            $data['created_by'] = 1;
        }

        return $data;
    }
}