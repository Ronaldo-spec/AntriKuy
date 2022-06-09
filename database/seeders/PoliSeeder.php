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
                'deskripsi' => 'Poli Umum mmberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.Pelayanan Poli Umum meliputi Konsultasi, penyuluhan, dan pemeriksaan kesehatan fisik secara umum.',
                'jam_buka' => '08:00',
                'jam_tutup' => '13:00',
                'id_dokter' => '1',
            ],
            [
                'nama_poli' => 'Poli Penyakit Dalam',
                'deskripsi' => 'Poli Penyakit Dalam merupakan poliklinik yang menangani orang dewasa dan lansia dengan penanganan penyakit yang meliputi non-bedah. Poli penyakit dalam memberikan penanganan kesehatan preventif, pemeriksaan fisik, memberikan penanganan darurat dan sejenisnya.',
                'jam_buka' => '08:00',
                'jam_tutup' => '13:00',
                'id_dokter' => '2',
            ],
            [
                'nama_poli' => 'Poli Gigi',
                'deskripsi' => 'Poli Gigi: Tujuan, Jenis, dan Prosedur
“Poli gigi adalah layanan seputar kesehatan mulut dan gigi. Mulai dari pemeriksaan kesehatan, pembersihan, pengobatan, hingga tindakan medis lebih lanjut.',
                'jam_buka' => '08:00',
                'jam_tutup' => '13:00',
                'id_dokter' => '3',
            ],
            [
                'nama_poli' => 'THT',
                'deskripsi' => 'THT adalah layanan diagnosa dan terapi berbagai gangguan dan penyakit organ-organ telinga, hidung, dan tenggorokan.',
                'jam_buka' => '08:00',
                'jam_tutup' => '13:00',
                'id_dokter' => '4',
            ],
        ];
        DB::table('poli')->insert($data);
    }
}
