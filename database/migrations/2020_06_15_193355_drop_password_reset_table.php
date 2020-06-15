<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropPasswordResetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('password_reset');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('password_reset', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userID');
            $table->bigInteger('resetCode');
            $table->dateTime('codeExpiration');
            $table->foreign('userID')->references('id')->on('users');
            $table->timestamps();
        });
    }
}
