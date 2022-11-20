<?php

namespace Modules\Product\Interfaces\Repositories;

interface BrandRepositoryInterface extends AbstractRepositoryInterface
{
    public function forceDelete($id);
}
