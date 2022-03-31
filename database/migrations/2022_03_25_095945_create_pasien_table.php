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
            $table->string('nik')->unique()->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('alamat')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('status_jaminan_kesehatan')->nullable();
            $table->string('jenis_jaminan_kesehatan')->nullable();
            $table->string('no_jaminan_kesehatan')->unique();
            $table->string('foto');
            $table->string('scan_jaminan_kesehatan');
            $table->string('scan_ktp')->nullable();
            $table->unsignedBigInteger('id_akun')->nullable();
            $table->unsignedBigInteger('id_antrian')->nullable();
            $table->foreign('id_akun')->references('id')->on('users');
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
        Schema::dropIfExists('pasien');
    }
};
