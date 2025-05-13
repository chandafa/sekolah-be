<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_extra;

class TbExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tb_extra::insert([
            [
                'extra_name'     => 'Pramuka',
                'extra_text'     => 'Kegiatan ekstrakurikuler wajib yang mendidik kedisiplinan dan kerja sama.',
                'extra_type'     => 'Wajib',
                'extra_logo'     => 'logos/pramuka_logo.png',
                'extra_image'    => 'images/pramuka.jpg',
                'instagram'      => 'https://instagram.com/pramuka_ekstra',
                'telegram'       => 'https://t.me/pramuka_channel',
                'extra_hari'     => 'Jumat',
            ],
            [
                'extra_name'     => 'Paskibra',
                'extra_text'     => 'Ekstrakurikuler pengibar bendera yang menanamkan jiwa nasionalisme.',
                'extra_type'     => 'Pilihan',
                'extra_logo'     => 'logos/paskibra_logo.png',
                'extra_image'    => 'images/paskibra.jpg',
                'instagram'      => 'https://instagram.com/paskibra_ekstra',
                'telegram'       => 'https://t.me/paskibra_channel',
                'extra_hari'     => 'Sabtu',
            ],
        ]);
    }
}
