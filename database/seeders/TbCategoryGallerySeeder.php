<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_category_gallery;

class TbCategoryGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tb_category_gallery::insert([
            [
                'category_name' => 'Kegiatan Siswa',
            ],
            [
                'category_name' => 'Prestasi',
            ],
            [
                'category_name' => 'Kegiatan Guru',
            ],
        ]);
    }
}
