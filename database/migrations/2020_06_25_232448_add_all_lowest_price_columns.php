<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAllLowestPriceColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('lowestGoatPrice', 10, 2);
            $table->decimal('lowestFcPrice', 10, 2);
            $table->decimal('lowestKixPrice', 10, 2);
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
            $table->dropColumn('lowestGoatPrice');
            $table->dropColumn('lowestFcPrice');
            $table->dropColumn('lowestKixPrice');
        });
    }
}
