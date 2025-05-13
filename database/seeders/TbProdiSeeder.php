<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_prodi;

class TbProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tb_prodi::create([
            'prodi_name' => 'Teknologi dan Rekayasa',
            'prodi_short' => 'TDR',
            'prodi_color' => '#007bff', // contoh warna biru Bootstrap
        ]);

        tb_prodi::create([
            'prodi_name' => 'Bisnis dan Manajemen',
            'prodi_short' => 'BDM',
            'prodi_color' => '#28a745',
        ]);

        tb_prodi::create([
            'prodi_name' => 'Kesehatan dan Kecantikan',
            'prodi_short' => 'KK',
            'prodi_color' => '#dc3545',
        ]);

        tb_prodi::create([
            'prodi_name' => 'Seni dan Desain',
            'prodi_short' => 'SD',
            'prodi_color' => '#ffc107',
        ]);
    }
}
