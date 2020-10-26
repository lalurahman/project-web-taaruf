<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkhwatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akhwats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('alamat');
            $table->string('no_hp', 15)->unique();
            $table->text('cv');
            $table->text('riwayat_penyakit');
            $table->text('keterampilan_id');
            $table->unsignedBigInteger('suku_id');
            $table->unsignedBigInteger('rambut_id');
            $table->unsignedBigInteger('pekerjaan_id');
            $table->unsignedBigInteger('wajah_id');
            $table->unsignedBigInteger('tinggi_id');
            $table->unsignedBigInteger('tubuh_id');
            $table->unsignedBigInteger('organisasi_id');
            $table->unsignedBigInteger('pendidikan_id');
            $table->unsignedBigInteger('kulit_id');
            $table->unsignedBigInteger('darah_id');
            $table->unsignedBigInteger('nikah_id');
            $table->timestamps();

            $table->foreign('suku_id')->references('id')->on('sukus')->onDelete('cascade');
            // $table->foreign('keterampilan_id')->references('id')->on('keterampilans')->onDelete('cascade');
            $table->foreign('rambut_id')->references('id')->on('rambuts')->onDelete('cascade');
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaans')->onDelete('cascade');
            $table->foreign('wajah_id')->references('id')->on('wajahs')->onDelete('cascade');
            $table->foreign('tinggi_id')->references('id')->on('tinggis')->onDelete('cascade');
            $table->foreign('tubuh_id')->references('id')->on('tubuhs')->onDelete('cascade');
            $table->foreign('organisasi_id')->references('id')->on('organisasis')->onDelete('cascade');
            $table->foreign('pendidikan_id')->references('id')->on('pendidikans')->onDelete('cascade');
            $table->foreign('kulit_id')->references('id')->on('kulits')->onDelete('cascade');
            $table->foreign('darah_id')->references('id')->on('darahs')->onDelete('cascade');
            $table->foreign('nikah_id')->references('id')->on('nikahs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akhwats');
    }
}
