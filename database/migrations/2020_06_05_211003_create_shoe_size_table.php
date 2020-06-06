<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoeSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe_size', function (Blueprint $table) {
            $table->unsignedBigInteger('productID');
                $table->foreign('productID')->references('id')->on('products');
            $table->string('Site_Name', 20);
            $table->decimal('Shoe_Size', 2, 1);
            $table->boolean('in_Stock');
            $table->decimal('Price', 10, 2);
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
        Schema::dropIfExists('shoe_size');
    }
}
