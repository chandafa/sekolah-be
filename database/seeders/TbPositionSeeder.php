<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_position;

class TbPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            [
                'position_name' => 'Operator Mesin',
                'position_type' => 'Full Time',
                'kemitraan_id' => 1, // pastikan ini cocok dengan data tb_kemitraans
            ],
            [
                'position_name' => 'Frontend Developer',
                'position_type' => 'Internship',
                'kemitraan_id' => 2,
            ],
            [
                'position_name' => 'IoT Engineer',
                'position_type' => 'Freelance',
                'kemitraan_id' => 2,
            ],
        ];

        foreach ($positions as $position) {
            tb_position::create($position);
        }
    }
}
