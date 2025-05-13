<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_category_artikel;

class TbCategoryArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tb_category_artikel::insert([
            [
                'category_name' => 'Berita Sekolah',
            ],
            [
                'category_name' => 'Pengumuman',
            ],
            [
                'category_name' => 'Prestasi',
            ],
        ]);
    }
}
