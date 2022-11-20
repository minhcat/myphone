<?php

namespace Modules\Product\Entities;

use App\Interfaces\LoggableInterface;
use App\Models\Traits\Loggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model implements LoggableInterface
{
    use HasFactory, SoftDeletes, Loggable;

    protected $fillable = ['name', 'slug', 'description', 'is_lock', 'is_show', 'created_by', 'created_at', 'updated_at'];

    protected $logInstance;

    protected $logIdColumn = 'brand_id';

    public function __construct(array $attributes = [])
    {
        $this->logInstance = new BrandLog();

        parent::__construct($attributes);
    }
    protected static function newFactory()
    {
        // return \Modules\Product\Database\factories\BrandFactory::new();
    }
}
