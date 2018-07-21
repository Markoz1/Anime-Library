<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimeFansubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime_fansub', function (Blueprint $table) {
            $table->unsignedInteger('anime_id');
            $table->foreign('anime_id')->references('id')->on('animes');
            $table->unsignedInteger('fansub_id');
            $table->foreign('fansub_id')->references('id')->on('fansubs');
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
        Schema::dropIfExists('anime_fansub');
    }
}
