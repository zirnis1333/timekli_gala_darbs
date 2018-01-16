<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RakstaTagi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raksta_tagi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('raksts_id');
            $table->integer('tags_id');
            $table->timestamps();
            $table->foreign('tags_id')->references('id')->on('raksts');
            $table->foreign('raksts_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raksta_tagi');
    }
}
