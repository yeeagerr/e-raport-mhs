<?php

namespace App\Imports;

use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NilaiImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        $subjects = Mapel::all();

        foreach ($rows as $row) {
            $siswa = Siswa::where('nama', $row['nama'])->first();
            if ($siswa) {
                foreach ($subjects as $mapel) {
                    $strLower = strtolower($mapel->nama_mapel);
                    if ($row[$strLower] ?? "") {
                        Nilai::updateOrCreate(
                            [
                                'siswa_id' => $siswa->id,
                                'mapel_id' => $mapel->id,
                                'ckmin' => '70',
                                'ckmax' => '100'
                            ],
                            [
                                'na' => $row[$strLower],
                            ]
                        );
                    }
                }
            }
        }
    }
}
