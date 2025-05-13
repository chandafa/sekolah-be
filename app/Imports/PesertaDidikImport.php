<?php

namespace App\Imports;


use App\Models\tb_peserta_didik;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PesertaDidikImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        Log::info('Processing row:', $row);

        return new tb_peserta_didik([
            'nisn'          => $row['nisn'],
            'nis'           => $row['nis'],
            'nama'          => $row['nama'],
            'kelas'         => $row['kelas'],
            'tempat_lahir'  => $row['tempat_lahir'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'agama'         => $row['agama'],
            'gender'        => $row['gender'],
            'telp'          => $row['telp'],
            'alamat'        => $row['alamat'],
        ]);
    }
}
