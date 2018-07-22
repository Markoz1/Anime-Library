<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEstacionesToTemporadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temporadas', function (Blueprint $table) {
            $table->unsignedInteger('estacion_id')->nullable()->after('nombre');
            $table->foreign('estacion_id')->references('id')->on('estaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temporadas', function (Blueprint $table) {
            $table->dropForeign(['estacion_id']);
            $table->dropColumn('estacion_id');
        });
    }
}
