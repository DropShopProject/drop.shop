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
            $table->unsignedBigInteger('links_id');
                $table->foreign('links_id')->references('id')->on('scraper_input');
            $table->string('brand_name', 50);
            $table->string('product_name', 50);
            $table->string('collab_name', 100);
            $table->string('model_num', 50);
            $table->mediumText('product_description');
            $table->date('release_date');
            $table->decimal('lowest_goat_price', 10, 2);
            $table->decimal('lowest_fc_price', 10, 2);
            $table->decimal('lowest_kix_price', 10, 2);
            $table->string('img_file_path', 200)->unique();
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
