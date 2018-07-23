<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVideosToAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animes', function (Blueprint $table) {
            $table->unsignedInteger('video_id')->nullable()->after('subtitulo_principal_id');
            $table->foreign('video_id')->references('id')->on('videos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animes', function (Blueprint $table) {
            $table->dropForeign(['video_id']);
            $table->dropColumn('video_id');
        });
    }
}
