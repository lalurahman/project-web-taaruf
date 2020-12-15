<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnSukuIdToAkhwatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('akhwats', function (Blueprint $table) {
            $table->dropForeign(['suku_id']);
            $table->dropColumn('suku_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('akhwats', function (Blueprint $table) {
            $table->unsignedBigInteger('suku_id');
            $table->foreign('suku_id')->references('id')->on('sukus')->onDelete('cascade');
        });
    }
}
