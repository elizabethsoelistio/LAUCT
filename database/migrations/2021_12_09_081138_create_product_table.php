<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->unsignedBigInteger('category_id');
            $table->string('product_name');
            $table->longText('product_description');
            $table->integer('intial_bid'); //initial price
            $table->dateTime('dateTime');
            $table->integer('highest_bid'); //price
            $table->integer('highest_bid_id');
            $table->string('product_image');
            $table->timestamps();

            $table->foreign('category_id')->references('category_id')->on('category')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
