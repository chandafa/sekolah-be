<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_pemberitahuan_type;

class PemberitahuanTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['pemberitahuan_type_name' => 'Informasi Umum'],
            ['pemberitahuan_type_name' => 'Peringatan'],
            ['pemberitahuan_type_name' => 'Pengumuman Penting'],
            ['pemberitahuan_type_name' => 'Notifikasi Pembayaran'],
            ['pemberitahuan_type_name' => 'Lainnya'],
        ];

        foreach ($data as $item) {
            tb_pemberitahuan_type::create($item);
        }
    }
}
