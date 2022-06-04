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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique()->primary()->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('alamat')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('status_jaminan_kesehatan')->nullable();
            $table->string('jenis_jaminan_kesehatan')->nullable();
            $table->string('no_jaminan_kesehatan')->unique()->nullable();
            $table->string('foto')->nullable();
            $table->string('scan_jaminan_kesehatan')->nullable();
            $table->string('scan_ktp')->nullable();
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
        Schema::dropIfExists('pasien');
    }
};
