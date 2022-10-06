<?php

namespace Modules\Product\Entities;

use App\Interfaces\LoggableInterface;
use App\Models\Traits\Loggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements LoggableInterface
{
    use HasFactory, SoftDeletes, Loggable;

    protected $fillable = ['name', 'slug', 'price', 'is_lock', 'is_show', 'description', 'brand_id', 'created_by'];

    protected $logInstance;

    protected $logIdColumn = 'product_id';

    public function __construct(array $attributes = [])
    {
        $this->logInstance = new ProductLog();

        parent::__construct($attributes);
    }
    
    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFactory::new();
    }
}
