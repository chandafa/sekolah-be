<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_pemberitahuan_category;
use App\Models\tb_pemberitahuan_type;

class TbPemberitahuanCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan ada minimal satu type pemberitahuan
        $type = tb_pemberitahuan_type::first();
        if (!$type) {
            $type = tb_pemberitahuan_type::create([
                'pemberitahuan_type_name' => 'Informasi Umum',
            ]);
        }

        tb_pemberitahuan_category::create([
            'pemberitahuan_category_name' => 'Pengumuman Penting',
            'pemberitahuan_category_color' => 'red',
            'type' => $type->id_pemberitahuan_type,
        ]);

        tb_pemberitahuan_category::create([
            'pemberitahuan_category_name' => 'Kegiatan Sekolah',
            'pemberitahuan_category_color' => 'blue',
            'type' => $type->id_pemberitahuan_type,
        ]);
    }
}
