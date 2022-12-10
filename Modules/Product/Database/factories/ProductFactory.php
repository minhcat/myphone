<?php
namespace Modules\Product\Database\factories;

use App\Helpers\Common;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Product\Entities\Product::class;

    /**
     * The data to generate random product.
     * 
     * @var array
     */
    protected $data = null;

    /**
     * Create a new factory instance.
     *
     * @param  int|null  $count
     * @param  \Illuminate\Support\Collection|null  $states
     * @param  \Illuminate\Support\Collection|null  $has
     * @param  \Illuminate\Support\Collection|null  $for
     * @param  \Illuminate\Support\Collection|null  $afterMaking
     * @param  \Illuminate\Support\Collection|null  $afterCreating
     * @param  string|null  $connection
     * @return void
     */
    public function __construct(
        $count = null,
        ?Collection $states = null,
        ?Collection $has = null,
        ?Collection $for = null,
        ?Collection $afterMaking = null,
        ?Collection $afterCreating = null,
        $connection = null
    )
    {
        $this->data = config('dummy.factory.product');
        parent::__construct($count, $states, $has, $for, $afterMaking, $afterCreating, $connection);
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return $this->makeRandomProduct();
    }

    private function makeRandomProduct()
    {
        static $index;
        $index ++;

        $data = $this->data;

        $rand1 = rand(0, count($data) - 1);
        $brand = $data[$rand1];

        $rand2 = rand(0, count($brand->products) - 1);
        $product = $brand->products[$rand2];

        $rand3 = rand(0, count($product->versions) - 1);
        $version = $product->versions[$rand3];

        $rand4 = rand($product->price[0], $product->price[1]);
        $price = $rand4 * 1000000;

        $sku = str_pad($index, 4, '0', STR_PAD_LEFT);

        unset($this->data[$rand1]->products[$rand2]->versions[$rand3]);
        $this->data[$rand1]->products[$rand2]->versions = array_values($this->data[$rand1]->products[$rand2]->versions);
        if ($this->data[$rand1]->products[$rand2]->versions == null) {
            unset($this->data[$rand1]->products[$rand2]);
            $this->data[$rand1]->products = array_values($this->data[$rand1]->products);
            if ($this->data[$rand1]->products == null) {
                unset($this->data[$rand1]);
                $this->data = array_values($this->data);
            }
        }

        return [
            'name'          => $name = $product->name . ' ' . $version->name,
            'slug'          => Str::slug($name),
            'sku'           => $brand->sku . $product->sku . $version->sku . $sku,
            'regular_price' => $price,
            'description'   => $this->faker->paragraph(10),
            'brand_id'      => $brand->id
        ];
    }
}

