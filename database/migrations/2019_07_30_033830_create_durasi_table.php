<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDurasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('durasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_paket');
            $table->integer('jam')->nullable();
            $table->integer('hari')->nullable();
            $table->integer('malam')->nullable();
            $table->timestamps();

            $table->foreign('id_paket')->references('id')->on('paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('durasi');
    }
}
