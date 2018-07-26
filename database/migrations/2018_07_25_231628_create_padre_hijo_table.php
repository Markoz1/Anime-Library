<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadreHijoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padre_hijo', function (Blueprint $table) {
            $table->unsignedInteger('padre_id');
            $table->foreign('padre_id')->references('id')->on('animes');
            $table->unsignedInteger('hijo_id');
            $table->foreign('hijo_id')->references('id')->on('animes');
            $table->string('tipo_relacion');
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
        Schema::dropIfExists('padre_hijo');
    }
}
