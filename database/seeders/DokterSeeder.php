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
                'bio' => 'Merupakan lulusan Fakultas Kedokteran Universitas Gadjah Mada. Dr. Harold Kertanegara kuliah di Fakultas Kedokteran sejak tahun 2009 dan lulus pada tahun 2013 lalu. Harold Kertanegara dibesarkan di Karanganyar, Solo, Jawa Tengah.',
                'foto' => 'img/harold.jpg'
            ],
            [
                'nama_dokter' => 'dr. Boyke Dian Wijaya, Sp.PD.',
                'jam_datang' => '08:00:00',
                'jam_pulang' => '13:00:00',
                'spesialis' => 'Poli Penyakit Dalam',
                'bio' => 'Merupakan lulusan Fakultas Kedokteran Universitas Gadjah Mada. Dr. Boyke Dian Wijaya kuliah di Fakultas Kedokteran sejak tahun 2009 dan lulus pada tahun 2013 lalu. Boyke Dian Wijaya dibesarkan di Karanganyar, Solo, Jawa Tengah.',
                'foto' => 'img/boyke.jpg'
            ],
            [
                'nama_dokter' => 'drg. Johannes Mike Ridwan',
                'jam_datang' => '08:00:00',
                'jam_pulang' => '13:00:00',
                'spesialis' => 'Poli Gigi',
                'bio' => 'Merupakan lulusan Fakultas Kedokteran Universitas Gadjah Mada. Dr. Johannes Mike Ridwan kuliah di Fakultas Kedokteran sejak tahun 2009 dan lulus pada tahun 2013 lalu. Johannes Mike Ridwan dibesarkan di Karanganyar, Solo, Jawa Tengah.',
                'foto' => 'img/mike.jpg'
            ],
            [
                'nama_dokter' => 'dr. Johnny Sins, Sp.THT.',
                'jam_datang' => '08:00:00',
                'jam_pulang' => '13:00:00',
                'spesialis' => 'THT',
                'bio' => 'Merupakan lulusan Fakultas Kedokteran Universitas Gadjah Mada. Dr. Johnny Sins kuliah di Fakultas Kedokteran sejak tahun 2009 dan lulus pada tahun 2013 lalu. Johnny Sins dibesarkan di Karanganyar, Solo, Jawa Tengah.',
                'foto' => 'img/johny.jpg'
            ],
        ];
        DB::table('dokter')->insert($data);
    }
}
