<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropDisplayNameAndRetailPriceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('displayName');
            $table->dropColumn('retailPrice');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
         Schema::table('products', function (Blueprint $table) {
            $table->string('displayName')->nullable();
            $table->string('retailPrice')->nullable();
        });
    }
}