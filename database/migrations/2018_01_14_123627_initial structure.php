<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialStructure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raksts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nosaukums')->unique();
            $table->text('saturs');
            $table->text('noskelts');
            $table->integer('user_id');
            $table->integer('akceptets')->default(false);
            $table->integer('sort')->default(1);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raksts');
    }
}
