<?php

namespace Modules\Product\Interfaces\Repositories;

interface ProductRepositoryInterface extends AbstractRepositoryInterface
{
    public function forceDelete($id);
    public function restore($id);
}
