<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubtitulosPrincipalesToAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animes', function (Blueprint $table) {
            $table->unsignedInteger('subtitulo_principal_id')->nullable()->after('temporada_id');
            $table->foreign('subtitulo_principal_id')->references('id')->on('subtitulos_principales');
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
            $table->dropForeign(['subtitulo_principal_id']);
            $table->dropColumn('subtitulo_principal_id');
        });
    }
}
