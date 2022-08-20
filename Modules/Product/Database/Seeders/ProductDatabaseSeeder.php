<?php

namespace Modules\Product\Database\Seeders;

use App\Helpers\Common;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Product;

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

        $data = [
            [
                'name'  => 'iphone 12',
                'slug'  => 'iphone-12',
                'price' => 12000000,
                'description'   => Common::lorem(250),
                'brand_id'      => 1,
                'is_lock'       => false,
                'is_show'       => true,
                'created_by'    => 1,
                'created_at'    => now()->toDateTimeString(),
                'updated_at'    => now()->toDateTimeString(),
                'deleted_at'    => null,
            ],
            [
                'name'  => 'galaxy s10',
                'slug'  => 'galaxy-s10',
                'price' => 10000000,
                'description'   => Common::lorem(250),
                'brand_id'      => 1,
                'is_lock'       => false,
                'is_show'       => true,
                'created_by'    => 1,
                'created_at'    => now()->toDateTimeString(),
                'updated_at'    => now()->toDateTimeString(),
                'deleted_at'    => null,
            ],
            [
                'name'  => 'iphone 13',
                'slug'  => 'iphone-13',
                'price' => 13000000,
                'description'   => Common::lorem(250),
                'brand_id'      => 1,
                'is_lock'       => false,
                'is_show'       => true,
                'created_by'    => 1,
                'created_at'    => now()->toDateTimeString(),
                'updated_at'    => now()->toDateTimeString(),
                'deleted_at'    => null,
            ],
            [
                'name'  => 'galaxy s12',
                'slug'  => 'galaxy-s12',
                'price' => 12000000,
                'description'   => Common::lorem(250),
                'brand_id'      => 1,
                'is_lock'       => false,
                'is_show'       => true,
                'created_by'    => 1,
                'created_at'    => now()->toDateTimeString(),
                'updated_at'    => now()->toDateTimeString(),
                'deleted_at'    => null,
            ],
            [
                'name'  => 'redmi note 10',
                'slug'  => 'redmi-note-10',
                'price' => 8000000,
                'description'   => Common::lorem(250),
                'brand_id'      => 1,
                'is_lock'       => false,
                'is_show'       => true,
                'created_by'    => 1,
                'created_at'    => now()->toDateTimeString(),
                'updated_at'    => now()->toDateTimeString(),
                'deleted_at'    => null,
            ],
        ];

        Product::insert($data);

        // $this->call("OthersTableSeeder");
    }
}
