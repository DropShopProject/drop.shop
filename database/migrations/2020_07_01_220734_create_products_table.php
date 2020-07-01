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
            $table->string('brandName', 50);
            $table->string('productName', 50);
            $table->string('collab_Name', 100);
            $table->string('modelNum', 50);
            $table->mediumText('productDescription');
            $table->date('releaseDate');
            $table->decimal('lowestGoatPrice', 10, 2);
            $table->decimal('lowestFcPrice', 10, 2);
            $table->decimal('lowestKixPrice', 10, 2);
            $table->string('imgFilePath', 200)->unique();
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
