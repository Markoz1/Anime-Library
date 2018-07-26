<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFuentesAnimesToAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animes', function (Blueprint $table) {
            $table->unsignedInteger('fuente_anime_id')->nullable()->after('subtitulo_principal_id');
            $table->foreign('fuente_anime_id')->references('id')->on('fuentes_animes');
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
            $table->dropForeign(['fuente_anime_id']);
            $table->dropColumn('fuente_anime_id');
        });
    }
}
