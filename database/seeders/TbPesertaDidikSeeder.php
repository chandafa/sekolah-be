<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_peserta_didik;

class TbPesertaDidikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tb_peserta_didik::insert([
            [
                'nisn'           => '0045789012',
                'nis'            => '23001',
                'nama'           => 'Ahmad Fadli',
                'kelas'          => 'XII RPL 1',
                'tempat_lahir'   => 'Bandung',
                'tanggal_lahir'  => '2007-04-20',
                'agama'          => 'Islam',
                'gender'         => 'L',
                'telp'           => '089601234567',
                'alamat'         => 'Jl. Cibaduyut No.45, Bandung',
            ],
            [
                'nisn'           => '0045789013',
                'nis'            => '23002',
                'nama'           => 'Putri Ayu',
                'kelas'          => 'XII RPL 1',
                'tempat_lahir'   => 'Cimahi',
                'tanggal_lahir'  => '2007-05-17',
                'agama'          => 'Islam',
                'gender'         => 'P',
                'telp'           => '089601234568',
                'alamat'         => 'Jl. Cihanjuang No.12, Cimahi',
            ],
        ]);
    }
}
