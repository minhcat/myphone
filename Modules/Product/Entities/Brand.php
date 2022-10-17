<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'is_lock', 'is_show', 'created_by', 'created_at', 'updated_at'];

    protected static function newFactory()
    {
        // return \Modules\Product\Database\factories\BrandFactory::new();
    }
}
