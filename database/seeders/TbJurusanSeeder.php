<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_jurusan;

class TbJurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tb_jurusan::insert([
            [
                'jurusan_nama' => 'Rekayasa Perangkat Lunak',
                'jurusan_short' => 'RPL',
                'jurusan_thumbnail' => 'thumbnails/jurusan_rpl.jpg',
                'jurusan_text' => 'Jurusan yang berfokus pada pengembangan software dan aplikasi.',
                'id_prodi' => 1,
                'jurusan_logo' => 'logos/rpl_logo.png',
            ],
            [
                'jurusan_nama' => 'Teknik Komputer dan Jaringan',
                'jurusan_short' => 'TKJ',
                'jurusan_thumbnail' => 'thumbnails/jurusan_tkj.jpg',
                'jurusan_text' => 'Jurusan yang mempelajari jaringan komputer dan perangkat keras.',
                'id_prodi' => 1,
                'jurusan_logo' => 'logos/tkj_logo.png',
            ],
            [
                'jurusan_nama' => 'Multimedia',
                'jurusan_short' => 'MM',
                'jurusan_thumbnail' => 'thumbnails/jurusan_mm.jpg',
                'jurusan_text' => 'Jurusan yang berfokus pada desain grafis dan multimedia.',
                'id_prodi' => 2,
                'jurusan_logo' => 'logos/mm_logo.png',
            ],
            [
                'jurusan_nama' => 'Teknik Elektronika',
                'jurusan_short' => 'TE',
                'jurusan_thumbnail' => 'thumbnails/jurusan_te.jpg',
                'jurusan_text' => 'Jurusan yang mempelajari sistem elektronika dan kontrol.',
                'id_prodi' => 2,
                'jurusan_logo' => 'logos/te_logo.png',
            ],
            [
                'jurusan_nama' => 'Teknik Kendaraan Ringan',
                'jurusan_short' => 'TKR',
                'jurusan_thumbnail' => 'thumbnails/jurusan_tkr.jpg',
                'jurusan_text' => 'Jurusan yang berfokus pada perawatan dan perbaikan kendaraan ringan.',
                'id_prodi' => 3,
                'jurusan_logo' => 'logos/tkr_logo.png',
            ],
            [
                'jurusan_nama' => 'Teknik Gambar Bangunan',
                'jurusan_short' => 'TGB',
                'jurusan_thumbnail' => 'thumbnails/jurusan_tgb.jpg',
                'jurusan_text' => 'Jurusan yang mempelajari desain dan gambar bangunan.',
                'id_prodi' => 3,
                'jurusan_logo' => 'logos/tgb_logo.png',
            ],
            [
                'jurusan_nama' => 'Teknik Pemesinan',
                'jurusan_short' => 'TP',
                'jurusan_thumbnail' => 'thumbnails/jurusan_tp.jpg',
                'jurusan_text' => 'Jurusan yang berfokus pada proses pemesinan dan manufaktur.',
                'id_prodi' => 4,
                'jurusan_logo' => 'logos/tp_logo.png',
            ],
            [
                'jurusan_nama' => 'Teknik Audio Video',
                'jurusan_short' => 'TAV',
                'jurusan_thumbnail' => 'thumbnails/jurusan_tav.jpg',
                'jurusan_text' => 'Jurusan yang mempelajari teknologi audio dan video.',
                'id_prodi' => 4,
                'jurusan_logo' => 'logos/tav_logo.png',
            ],
        ]);
    }
}
