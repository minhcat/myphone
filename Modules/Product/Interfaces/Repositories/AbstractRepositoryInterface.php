<?php

namespace Modules\Product\Interfaces\Repositories;

interface AbstractRepositoryInterface
{
    public function all($paginable = true);
    public function find($id);
    public function search(array $data);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}