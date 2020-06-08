<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShoeSizePKs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('shoe_size', function (Blueprint $table) {
        $table->primary(array('productID', 'Site_Name', 'Shoe_Size', 'in_Stock', 'Price'));
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      $table->dropPrimary(array('productID', 'Site_Name', 'Shoe_Size', 'in_Stock', 'Price'));
    }
}
