<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('sinopsis');
            $table->enum('tipo', ['TV-Serie', 'OVA', 'Pelicula', 'Especial']);
            $table->year('year');
            $table->decimal('tamano', 8, 2);//Mb
            $table->boolean('ordered_chapters')->nullable();
            $table->enum('version', ['Unica', 'Decidida', 'Mejor'])->nullable();
            $table->enum('estado', ['1', '2', '3', '4'])->nullable();
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
        Schema::dropIfExists('animes');
    }
}
