<?php

namespace Modules\Product\Database\Seeders;

use App\Helpers\Common;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\ProductLog;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Product::truncate();
        ProductLog::truncate();

        $products = Product::factory()->count(30)->create();
    }
}
