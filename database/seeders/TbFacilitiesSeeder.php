<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_facilities;

class TbFacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            [
                'facility_name' => 'Mesin Frais',
                'facility_image' => 'img\fasilitas\mesin-default.jpg',
                'facility_text' => 'Mesin Frais',
                'id_prodi' => 1,
            ],
            [
                'facility_name' => 'Laser Cutting',
                'facility_image' => 'img\fasilitas\mesin-default.jpg',
                'facility_text' => 'Laser Cutting',
                'id_prodi' => 1,
            ],
            [
                'facility_name' => 'Plasma Cutting',
                'facility_image' => 'img\fasilitas\mesin-default.jpg',
                'facility_text' => 'Plasma Cutting',
                'id_prodi' => 1,
            ],
            [
                'facility_name' => 'CNC Milling',
                'facility_image' => 'img\fasilitas\mesin-default.jpg',
                'facility_text' => 'CNC Milling',
                'id_prodi' => 1,
            ],
            [
                'facility_name' => 'CNC Turning',
                'facility_image' => 'img\fasilitas\mesin-default.jpg',
                'facility_text' => 'CNC Turning',
                'id_prodi' => 1,
            ],
        ];

        foreach ($facilities as $facility) {
            tb_facilities::create($facility);
        }
    }
}
