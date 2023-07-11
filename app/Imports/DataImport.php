<?php

namespace App\Imports;

use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class DataImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $skipFirstRow = true;

        foreach ($rows as $row) {
            if ($skipFirstRow) {
                $skipFirstRow = false;
                continue;
            }
            
            UserData::create([
                'no_tentera' => $row[1] ?? null,	
                'nama' => $row[2] ?? null,	
                'kompeni' => $row[3] ?? null,	
                'tarikh_lahir' => Date::excelToDateTimeObject($row[4] ?? null),	
                'no_ic_awam' => $row[5] ?? null,	       
                'umur' => $row[6] ?? null,	       
                'negeri_kelahiran' => $row[7] ?? null,	
                'status_perkahwinan' => $row[8] ?? null,	
                'jumlah_anak' => $row[9] ?? null,	
                'agama' => $row[10] ?? null,	
                'bangsa' => $row[11] ?? null,	
                'keputusan_SPM' => $row[12] ?? null,	
                'kelayakan_akademik_tertinggi' => $row[13] ?? null,	
                'bidang_pengajian' => $row[14] ?? null,	
                'pusat_pengajian' => $row[15] ?? null,	
                'CGPA' => $row[16] ?? null,	
                'sukan' => $row[17] ?? null,	
                'muzik' => $row[18] ?? null,	
                'pekerjaan_sebelum_masuk_tentera' => $row[19] ?? null,	
                'bahasa' => $row[20] ?? null,	
                'tinggi' => $row[21] ?? null,	
                'berat' => $row[22] ?? null,	
                'BMI' => $row[23] ?? null,	
                'kemahiran_membaca_alquran' => $row[24] ?? null,	
                'strength_and_weakness' => $row[25] ?? null,	
                'pemilihan_KOR_pilihan_pertama' => $row[26] ?? null,	
                'pemilihan_KOR_pilihan_kedua' => $row[27] ?? null,	
                'pemilihan_KOR_pilihan_ketiga' => $row[28] ?? null,	
                'berminat_menyertai_pasukan_khas' => $row[29] ?? null,
            ]);
        }
    }
}
