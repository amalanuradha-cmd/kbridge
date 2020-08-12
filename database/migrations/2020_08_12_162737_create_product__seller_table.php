<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSellerTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_seller', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id');
            $table->string('seller_id');
            $table->string('price')->default(' ');
            $table->string('stock')->default(' ');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product__sellers');
    }
}
