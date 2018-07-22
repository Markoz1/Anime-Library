<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtitulosPrincipalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtitulos_principales', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', ['Softsubs', 'Hardsubs']);
            $table->string('notas_version')->nullable();
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
        Schema::dropIfExists('subtitulos_principales');
    }
}
