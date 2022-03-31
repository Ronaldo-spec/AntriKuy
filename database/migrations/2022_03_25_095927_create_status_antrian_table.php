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
        Schema::create('status_antrian', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_antrian_sekarang');
            $table->string('jumlah_antrian');
            $table->unsignedBigInteger('id_antrian')->nullable();
            $table->foreign('id_antrian')->references('id')->on('antrian');
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
        Schema::dropIfExists('status_antrian');
    }
};
