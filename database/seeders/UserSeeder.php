<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pasien;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pasien::create([
            'nik' => '3518113111234568',
            'nama_lengkap' => 'Sapanih',
            'alamat' => 'Jl. Soekarno Hatta No.8, Lowokwaru, Malang',
            'jenis_kelamin' => 'laki-laki',
            'no_hp' => '081234567888',
            'tempat_lahir' => 'Malang',
            'tgl_lahir' => '2000-10-15'
        ]);
        $id_pasien = Pasien::where('nik', '=', '3518113111234568')->first();
        $id_pasien = $id_pasien->id;
        User::create([
            'username' => 'Sapanih',
            'email' => 'user@admin.com',
            'role' => 'pasien',
            'id_pasien' => $id_pasien,
            'password' => Hash::make('qwe12345'),
            'email_verified_at' => '2022-06-08 15:40:17'
        ]);
    }
}
