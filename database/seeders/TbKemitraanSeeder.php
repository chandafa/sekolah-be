<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_kemitraan;

class TbKemitraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kemitraans = [
            [
                'kemitraan_name' => 'PT. Industri Mesin Sejahtera',
                'kemitraan_logo' => 'logos/pt_industri_logo.png',
                'kemitraan_thumbnail' => 'thumbnails/pt_industri_thumb.jpg',
                'kemitraan_description' => 'Perusahaan manufaktur yang bergerak di bidang mesin industri modern.',
                'kemitraan_city' => 'Bandung',
                'kemitraan_location_detail' => 'Jl. Soekarno Hatta No. 123, Bandung',
            ],
            [
                'kemitraan_name' => 'CV. Teknologi Nusantara',
                'kemitraan_logo' => 'logos/cv_teknologi_logo.png',
                'kemitraan_thumbnail' => 'thumbnails/cv_teknologi_thumb.jpg',
                'kemitraan_description' => 'Startup teknologi yang fokus pada pengembangan perangkat lunak dan IoT.',
                'kemitraan_city' => 'Jakarta',
                'kemitraan_location_detail' => 'Jl. M.H. Thamrin No. 45, Jakarta Pusat',
            ],
            [
                'kemitraan_name' => 'PT. Otomasi Digital',
                'kemitraan_logo' => 'logos/pt_otomasi_logo.png',
                'kemitraan_thumbnail' => 'thumbnails/pt_otomasi_thumb.jpg',
                'kemitraan_description' => 'Mitra strategis dalam pengembangan sistem otomasi industri.',
                'kemitraan_city' => 'Surabaya',
                'kemitraan_location_detail' => 'Jl. Darmo No. 17, Surabaya',
            ],
        ];

        foreach ($kemitraans as $item) {
            tb_kemitraan::create($item);
        }
    }
}
