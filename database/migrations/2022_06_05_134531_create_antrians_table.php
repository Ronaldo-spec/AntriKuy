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
            $table->string('nomor_antrian')->nullable();
            $table->unsignedBigInteger('id_pasien');
            $table->unsignedBigInteger('id_poli');
            $table->enum('status', ['menunggu', 'proses', 'selesai'])->default('menunggu');
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
