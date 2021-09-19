<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('ar_title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('ar_description')->nullable();
            $table->longText('nutritional_information')->nullable();
            $table->longText('ar_nutritional_information')->nullable();
            $table->string('product_type')->nullable();
            $table->string('ar_product_type')->nullable();
            $table->string('diet_needs')->nullable();
            $table->string('ar_diet_needs')->nullable();
            $table->string('specialty')->nullable();
            $table->string('ar_specialty')->nullable();
            $table->string('package_dimensions')->nullable();
            $table->string('ar_package_dimensions')->nullable();
            $table->string('package_weight')->nullable();
            $table->string('ar_package_weight')->nullable();
            $table->string('storage_requirements')->nullable();
            $table->string('ar_storage_requirements')->nullable();
            $table->string('origin_country')->nullable();
            $table->string('ar_origin_country')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->boolean('active')->default(0)->nullable();
            $table->string('currency')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
