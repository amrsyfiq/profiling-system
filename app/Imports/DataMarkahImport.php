<?php

namespace App\Imports;

use App\Models\DataMarkah;
use App\Models\UserData;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class DataMarkahImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $skipFirstRow = true;
        
        foreach ($rows as $row) {
            if ($skipFirstRow) {
                $skipFirstRow = false;
                continue;
            }
            $userDataId = UserData::where('no_tentera', $row[1])->value('id');
            
            if ($userDataId) {
                DataMarkah::create([
                    'user_data_id' => $userDataId,
                    'UJIAN_PENDORONG_SENJATA_MARKAH' => $row[5] ?? null,
                    'UJIAN_PENDORONG_SENJATA_GRED' => $row[6] ?? null,
                    'UJIAN_PENDORONG_PERTOLONGAN_CEMAS_MARKAH' => $row[7] ?? null,
                    'UJIAN_PENDORONG_PERTOLONGAN_CEMAS_GRED' => $row[8] ?? null,
                    'UJIAN_PENDORONG_IMP_MARKAH' => $row[9] ?? null,
                    'UJIAN_PENDORONG_IMP_GRED' => $row[10] ?? null,
                    'UJIAN_PENDORONG_BACA_PETA_MARKAH' => $row[11] ?? null,
                    'UJIAN_PENDORONG_BACA_PETA_GRED' => $row[12] ?? null,
                    'UJIAN_PENDORONG_SEMBOYAN_MARKAH' => $row[13] ?? null,
                    'UJIAN_PENDORONG_SEMBOYAN_GRED' => $row[14] ?? null,
                    'PLATUN' => $row[15] ?? null,
                    'SEKSYEN' => $row[16] ?? null,
                    'JANTINA' => $row[17] ?? null,
                ]);
            }
        }
    }
}
