<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHobiSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobi_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('siswa_id')->unsigned();
            $table->bigInteger('hobi_id')->unsigned();
            $table->foreign('siswa_id')->references('id')->on('siswas');
            $table->foreign('hobi_id')->references('id')->on('hobis');

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
        Schema::dropIfExists('hobi_siswa');
    }
}
