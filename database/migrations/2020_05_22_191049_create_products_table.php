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
            #insert columns
            $table->string('brandName', 50);
            $table->string('productName', 50);
            $table->string('modelNum', 50);
            $table->mediumText('productDescription');
            $table->date('releaseDate');
            $table->decimal('retailPrice', 10, 2);
            /*
            $table->decimal('resalePriceStockX', 10, 2);
            $table->decimal('resalePriceGOAT', 10, 2);
            $table->decimal('resalePriceFC', 10, 2);
            */
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
        Schema::dropIfExists('products');
    }
}
