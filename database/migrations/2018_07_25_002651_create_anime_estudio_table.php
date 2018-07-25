<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimeEstudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime_estudio', function (Blueprint $table) {
            $table->unsignedInteger('anime_id');
            $table->foreign('anime_id')->references('id')->on('animes');
            $table->unsignedInteger('estudio_id');
            $table->foreign('estudio_id')->references('id')->on('estudios');
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
        Schema::dropIfExists('anime_estudio');
    }
}
