<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pasien::create([
            'nik' => '3518113111234567',
            'nama_lengkap' => 'admin',
            'alamat' => 'Jl. Soekarno Hatta No.9, Lowokwaru, Malang',
            'jenis_kelamin' => 'laki-laki',
            'no_hp' => '081234567890',
            'tempat_lahir' => 'Malang',
            'tgl_lahir' => '2000-10-15'
        ]);
        $id_pasien = Pasien::where('nik', '=', '3518113111234567')->first();
        $id_pasien = $id_pasien->id;
        User::create([
            'username' => 'pew',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'id_pasien' => $id_pasien,
            'password' => Hash::make('qwe12345'),
            'email_verified_at' => '2022-06-08 15:40:17'
        ]);
    }
}
