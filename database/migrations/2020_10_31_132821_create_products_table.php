<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->unsignedBigInteger('product_line_id');
            $table->string('Name');
            $table->string('Scale');
            $table->string('Vendor');
            $table->string('PdtDescripthion');
            $table->integer('QtyInStock');
            $table->integer('BuyPrice');
            $table->string('MSRP');
            $table->timestamps();

            $table->foreign('product_line_id')->references('id')->on('productlines');
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
