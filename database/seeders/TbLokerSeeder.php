<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_loker;

class TbLokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokers = [
            [
                'loker_thumbnail' => 'thumbnails/loker_mesin.jpg',
                'loker_description' => 'Lowongan kerja untuk operator mesin frais dengan pengalaman minimal 1 tahun.',
                'position_id' => 1, // pastikan ID ini sesuai dengan isi tabel tb_positions
                'kemitraan_id' => 1, // pastikan ID ini sesuai dengan isi tabel tb_kemitraans
                'loker_available' => true,
                'loker_for' => 'Lulusan Teknik Mesin',
                'loker_pdf' => 'pdfs/loker_mesin.pdf',
            ],
            [
                'loker_thumbnail' => 'thumbnails/loker_iot.jpg',
                'loker_description' => 'Dibutuhkan pengembang IoT untuk proyek smart factory.',
                'position_id' => 2,
                'kemitraan_id' => 2,
                'loker_available' => true,
                'loker_for' => 'Lulusan Teknik Elektro / Teknik Komputer',
                'loker_pdf' => 'pdfs/loker_iot.pdf',
            ],
            [
                'loker_thumbnail' => 'thumbnails/loker_it.jpg',
                'loker_description' => 'Frontend Developer dengan pengalaman menggunakan Vue.js.',
                'position_id' => 3,
                'kemitraan_id' => 2,
                'loker_available' => true,
                'loker_for' => 'Lulusan Teknik Informatika',
                'loker_pdf' => 'pdfs/loker_it.pdf',
            ],
        ];

        foreach ($lokers as $loker) {
            tb_loker::create($loker);
        }
    }
}
