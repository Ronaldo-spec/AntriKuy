<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poli', function (Blueprint $table) {
            $table->id();
            $table->string('nama_poli');
            $table->text('deskripsi');
            $table->string('jam_buka');
            $table->string('jam_tutup');
            $table->unsignedBigInteger('id_dokter')->nullable();
            $table->foreign('id_dokter')->references('id')->on('dokter');
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
        Schema::dropIfExists('poli');
    }
};
