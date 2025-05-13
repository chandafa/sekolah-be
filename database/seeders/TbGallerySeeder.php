<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_gallery;

class TbGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tb_gallery::insert([
            [
                'gallery_title'     => 'Kegiatan Praktek Siswa',
                'id_category'       => 1, // pastikan id_category = 1 sudah ada di tb_category_gallery
                'gallery_text'      => 'Dokumentasi praktek jurusan RPL',
                'gallery_location'  => 'Lab RPL SMK Contoh',
                'gallery_file'      => 'images/gallery/praktek_rpl1.jpg',
                'file_type'         => 'image',
            ],
            [
                'gallery_title'     => 'Lomba Tingkat Nasional',
                'id_category'       => 2, // pastikan id_category = 2 sudah ada di tb_category_gallery
                'gallery_text'      => 'Prestasi siswa dalam lomba tingkat nasional',
                'gallery_location'  => 'Jakarta',
                'gallery_file'      => 'images/gallery/lomba_nasional.jpg',
                'file_type'         => 'image',
            ],
        ]);
    }
}
