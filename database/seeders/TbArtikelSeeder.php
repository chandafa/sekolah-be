<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_artikel;
use App\Models\tb_category_artikel;

class TbArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan minimal 1 kategori artikel tersedia
        $category = tb_category_artikel::first();
        if (!$category) {
            $category = tb_category_artikel::create([
                'category_name' => 'Berita Umum',
            ]);
        }

        tb_artikel::create([
            'artikel_title' => 'SMK Hebat 2025',
            'artikel_level' => 'Publik',
            'id_category' => $category->id_category,
            'category_name' => $category->category_name,
            'artikel_text' => 'SMK Hebat adalah program unggulan untuk siswa berprestasi.',
            'artikel_image' => 'artikel/smk_hebat.jpg',
            'artikel_viewer' => 0,
            'artikel_timestamp' => now(),
        ]);

        tb_artikel::create([
            'artikel_title' => 'Kegiatan MPLS 2025',
            'artikel_level' => 'Publik',
            'id_category' => $category->id_category,
            'category_name' => $category->category_name,
            'artikel_text' => 'MPLS dilaksanakan dengan penuh semangat dan kreatifitas.',
            'artikel_image' => 'artikel/mpls2025.jpg',
            'artikel_viewer' => 0,
            'artikel_timestamp' => now(),
        ]);
    }
}
