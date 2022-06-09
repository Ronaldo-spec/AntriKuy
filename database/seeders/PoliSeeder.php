<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliSeeder extends Seeder
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
                'nama_poli' => 'Poli Umum',
                'jam_buka' => '08:00',
                'jam_tutup' => '13:00',
                'id_dokter' => '1',
            ],
            [
                'nama_poli' => 'Poli Penyakit Dalam',
                'jam_buka' => '08:00',
                'jam_tutup' => '13:00',
                'id_dokter' => '2',
            ],
            [
                'nama_poli' => 'Poli Gigi',
                'jam_buka' => '08:00',
                'jam_tutup' => '13:00',
                'id_dokter' => '3',
            ],
            [
                'nama_poli' => 'THT',
                'jam_buka' => '08:00',
                'jam_tutup' => '13:00',
                'id_dokter' => '4',
            ],
        ];
        DB::table('poli')->insert($data);
    }
}
