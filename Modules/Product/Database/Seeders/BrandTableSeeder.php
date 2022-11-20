<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Brand;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Brand::truncate();

        $data = [
            [
                'name'          => 'apple',
                'slug'          => 'apple',
                'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
                'is_lock'       => false,
                'is_show'       => true,
                'created_by'    => 1,
                'created_at'    => now()->toDateTimeString(),
                'updated_at'    => now()->toDateTimeString(),
            ],
            [
                'name'          => 'samsung',
                'slug'          => 'samsung',
                'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
                'is_lock'       => false,
                'is_show'       => true,
                'created_by'    => 1,
                'created_at'    => now()->toDateTimeString(),
                'updated_at'    => now()->toDateTimeString(),
            ],
            [
                'name'          => 'xiaomi',
                'slug'          => 'xiaomi',
                'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
                'is_lock'       => false,
                'is_show'       => true,
                'created_by'    => 1,
                'created_at'    => now()->toDateTimeString(),
                'updated_at'    => now()->toDateTimeString(),
            ],
            [
                'name'          => 'oppo',
                'slug'          => 'oppo',
                'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
                'is_lock'       => false,
                'is_show'       => true,
                'created_by'    => 1,
                'created_at'    => now()->toDateTimeString(),
                'updated_at'    => now()->toDateTimeString(),
            ],
            [
                'name'          => 'vsmart',
                'slug'          => 'vsmart',
                'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
                'is_lock'       => false,
                'is_show'       => true,
                'created_by'    => 1,
                'created_at'    => now()->toDateTimeString(),
                'updated_at'    => now()->toDateTimeString(),
            ],
        ];

        Brand::insert($data);
    }
}
