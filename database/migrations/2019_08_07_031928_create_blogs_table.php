<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_type');
            $table->string('Judul');
            $table->string('gambar_blog');
            $table->longText('deskripsi');
            $table->boolean('featured');
            $table->timestamps();

            $table->foreign('id_type')->references('id')->on('type_blog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
