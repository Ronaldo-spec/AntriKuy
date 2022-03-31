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
        Schema::create('antrian', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_antrian');
            $table->date('tanggal');
            $table->string('status');
            $table->unsignedBigInteger('id_petugas')->nullable();
            $table->unsignedBigInteger('id_poli')->nullable();
            $table->foreign('id_petugas')->references('id')->on('petugas');
            $table->foreign('id_poli')->references('id')->on('poli');
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
};
