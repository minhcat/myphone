<?php

namespace Modules\Product\Interfaces\Services;

use Illuminate\Http\Request;

interface BrandServiceInterface
{
    public function all($paginable = false);
    public function find($id);
    public function search(Request $request);
    public function create(Request $request);
    public function update($id, Request $request);
    public function delete($id);
    public function forceDelete($id);
    public function getLogs($id, Request $request = null);
}