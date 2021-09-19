<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id', 'product_fk_4310298')->references('id')->on('products');
            $table->unsignedBigInteger('invoice_id')->nullable();
            $table->foreign('invoice_id', 'invoice_fk_4310371')->references('id')->on('invoices');
        });
    }
}
