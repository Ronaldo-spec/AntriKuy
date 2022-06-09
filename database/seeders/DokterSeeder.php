<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama_dokter' => 'dr. Harold Kertanegara',
                'jam_datang' => '08:00:00',
                'jam_pulang' => '13:00:00',
                'spesialis' => 'Poli Umum',
            ],
            [
                'nama_dokter' => 'dr. Mochammad Strange',
                'jam_datang' => '08:00:00',
                'jam_pulang' => '13:00:00',
                'spesialis' => 'Poli Umum',
            ],
            [
                'nama_dokter' => 'dr. Boyke Dian Wijaya, Sp.PD.',
                'jam_datang' => '08:00:00',
                'jam_pulang' => '13:00:00',
                'spesialis' => 'Poli Penyakit Dalam',
            ],
            [
                'nama_dokter' => 'drg. Johannes Mike Ridwan',
                'jam_datang' => '08:00:00',
                'jam_pulang' => '13:00:00',
                'spesialis' => 'Poli Gigi',
            ],
            [
                'nama_dokter' => 'dr. Johnny Sins, Sp.THT.',
                'jam_datang' => '08:00:00',
                'jam_pulang' => '13:00:00',
                'spesialis' => 'THT',
            ],
        ];
        DB::table('dokter')->insert($data);
    }
}
