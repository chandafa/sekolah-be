<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_pengumuman;
use Illuminate\Support\Carbon;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'pengumuman_nama' => 'Pemeliharaan Sistem',
                'pengumuman_target' => 'Semua Pengguna',
                'pengumuman_text' => 'Sistem akan mengalami pemeliharaan pada akhir pekan.',
                'pengumuman_date' => '2025-05-15',
                'pengumuman_time' => '22:00:00',
            ],
            [
                'pengumuman_nama' => 'Update Fitur Baru',
                'pengumuman_target' => 'Administrator',
                'pengumuman_text' => 'Fitur baru telah ditambahkan untuk manajemen user.',
                'pengumuman_date' => '2025-05-16',
                'pengumuman_time' => '10:00:00',
            ],
            [
                'pengumuman_nama' => 'Pemberitahuan Libur',
                'pengumuman_target' => 'Semua Pengguna',
                'pengumuman_text' => 'Sistem tidak aktif selama libur nasional.',
                'pengumuman_date' => '2025-05-20',
                'pengumuman_time' => '00:00:00',
            ],
        ];

        foreach ($data as $item) {
            tb_pengumuman::create(array_merge($item, [
                'pengumuman_timestamp' => Carbon::now(),
            ]));
        }
    }
}
