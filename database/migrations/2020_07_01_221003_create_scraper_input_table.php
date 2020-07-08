<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScraperInputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scraper_input', function (Blueprint $table) {
            $table->id();
            $table->string('goat_url')->unique();
            $table->string('fc_url')->unique();
            $table->string('kixify_url')->unique();
            $table->string('collab_name');
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
        Schema::dropIfExists('scraper_input');
    }
}
