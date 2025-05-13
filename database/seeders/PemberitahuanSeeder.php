<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_pemberitahuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PemberitahuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan sudah ada data di tabel kategori, tipe, dan admin terlebih dahulu
        $categoryId = DB::table('tb_pemberitahuan_category')->value('id_pemberitahuan_category') ?? 1;
        $typeId = DB::table('tb_pemberitahuan_type')->value('id_pemberitahuan_type') ?? 1;
        $adminId = DB::table('tb_admins')->value('id_admin') ?? 1;

        tb_pemberitahuan::create([
            'nama' => 'Pemberitahuan Penting',
            'target' => 'Semua Pengguna',
            'thumbnail' => 'default_thumbnail.jpg',
            'banner' => 'default_banner.jpg',
            'date' => now()->format('Y-m-d'),
            'time' => now()->format('H:i:s'),
            'text' => 'Ini adalah pemberitahuan penting untuk seluruh pengguna sistem.',
            'level' => 'Biasa',
            'location' => 'Jakarta',
            'type' => $typeId,
            'category' => $categoryId,
            'viewer' => 0,
            'published_by' => $adminId,
            'jurnal_by' => null,
            'approved' => true,
            'Approved_by' => $adminId,
            'pdf' => 'file_pemberitahuan.pdf',
        ]);
    }
}
