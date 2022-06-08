<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntriansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrian', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_antrian');
            $table->date('tanggal');
            $table->string('status');
            $table->unsignedBigInteger('id_pasien')->nullable();
            $table->unsignedBigInteger('id_poli')->nullable();
            $table->unsignedBigInteger('id_petugas')->nullable();
            $table->foreign('id_petugas')->references('id')->on('petugas');
            $table->foreign('id_poli')->references('id')->on('poli');
            $table->foreign('id_pasien')->references('id')->on('pasien');
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
        Schema::dropIfExists('antrian');
    }
}
