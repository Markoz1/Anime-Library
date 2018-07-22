<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdiomasToSubtitulosPrincipalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subtitulos_principales', function (Blueprint $table) {
            $table->unsignedInteger('idioma_id')->nullable()->after('notas_version');
            $table->foreign('idioma_id')->references('id')->on('idiomas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subtitulos_principales', function (Blueprint $table) {
            $table->dropForeign(['idioma_id']);
            $table->dropColumn('idioma_id');
        });
    }
}
