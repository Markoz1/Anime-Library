<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimeGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime_genero', function (Blueprint $table) {
            $table->unsignedInteger('anime_id');
            $table->foreign('anime_id')->references('id')->on('animes');
            $table->unsignedInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos');
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
        Schema::dropIfExists('anime_genero');
    }
}
