<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_slider_keunggulan;

class TbSliderKeunggulanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'SMK Hebat',
                'description' => 'Menyediakan peralatan modern dan lengkap untuk mendukung kegiatan belajar.',
            ],
            [
                'title' => 'SMK Unggul',
                'description' => 'Dibimbing oleh dosen dan instruktur berpengalaman di bidangnya.',
            ],
            [
                'title' => 'SMK Terbaik',
                'description' => 'Kurikulum disesuaikan dengan kebutuhan dunia kerja saat ini.',
            ],
        ];

        foreach ($sliders as $slider) {
            tb_slider_keunggulan::create($slider);
        }
    }
}
