<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandLog extends Model
{
    use HasFactory;

    protected $fillable = ['brand_id', 'log', 'type', 'created_by'];
}
