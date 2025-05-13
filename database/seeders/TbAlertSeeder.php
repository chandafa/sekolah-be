<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\url\tb_alert;

class TbAlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tb_alert::create([
            'alert_title' => 'Penting! Update Versi',
            'alert_url' => 'https://example.com/update',
            'alert_background_color' => '#ffcccc',
            'alert_button_color' => '#cc0000',
            'alert_button_text' => 'Perbarui Sekarang',
        ]);

        tb_alert::create([
            'alert_title' => 'Info Baru',
            'alert_url' => 'https://example.com/info',
            'alert_background_color' => '#ccffcc',
            'alert_button_color' => '#006600',
            'alert_button_text' => 'Lihat Info',
        ]);
    }
}
