<?php

namespace App\Imports;

use App\Models\Absen;
use App\Models\Siswa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AbsenImport implements ToCollection, WithHeadingRow
{

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {

            // dd($row['sakit']);

            $siswa = Siswa::where('nama', $row['nama'])->first();

            Absen::updateOrCreate([
                'siswa_id' => $siswa->id,
            ], [
                'sakit' => $row['sakit'] ?? "0",
                'izin' => $row['izin'] ?? "0",
                'alpha' => $row['alpha'] ?? "0"
            ]);
        }
    }
}
