<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->unsignedBigInteger('userID');
                $table->foreign('userID')->references('id')->on('users');
            $table->unsignedBigInteger('productID');            
                $table->foreign('productID')->references('id')->on('products');
            $table->primary(['userID', 'productID'])
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
