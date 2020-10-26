<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumnKeterampilanIdToAkhwatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('akhwats', function (Blueprint $table) {
            $table->dropColumn('keterampilan_id');
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
            $table->text('keterampilan_id');
        });
    }
}
