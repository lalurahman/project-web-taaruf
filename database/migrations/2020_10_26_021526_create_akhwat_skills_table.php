<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkhwatSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akhwats_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('akhwat_id');
            $table->unsignedBigInteger('keterampilan_id');
            // foreign key
            $table->foreign('akhwat_id')->references('id')->on('akhwats')->onDelete('cascade');
            $table->foreign('keterampilan_id')->references('id')->on('keterampilans')->onDelete('cascade');
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
        Schema::dropIfExists('akhwats_skills');
    }
}
