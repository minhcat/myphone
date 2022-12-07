<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('sku')->unique();
            $table->unsignedInteger('regular_price');
            $table->unsignedInteger('sale_price');
            $table->unsignedInteger('stock_quantity');
            $table->text('description')->default('');
            $table->unsignedInteger('brand_id')->nullable();
            $table->boolean('is_lock')->default(true);
            $table->boolean('is_show')->default(false);
            $table->unsignedInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
