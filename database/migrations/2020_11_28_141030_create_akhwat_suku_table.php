<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkhwatSukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akhwat_suku', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('akhwat_id');
            $table->unsignedBigInteger('suku_id');
            $table->foreign('akhwat_id')->references('id')->on('akhwats')->onDelete('cascade');
            $table->foreign('suku_id')->references('id')->on('sukus')->onDelete('cascade');
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
        Schema::dropIfExists('akhwat_suku');
    }
}
