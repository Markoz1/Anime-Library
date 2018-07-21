<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVersionsToAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animes', function (Blueprint $table) {
            $table->unsignedInteger('version_id')->after('ordered_chapters');
            $table->foreign('version_id')->references('id')->on('versions');
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
            $table->dropForeign(['version_id']);
            $table->dropColumn('version_id');
        });
    }
}
