<?php

namespace App\Imports;

use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class DataImport implements ToCollection
{
    private $columnIndex;

    public function __construct(int $columnIndex)
    {
        $this->columnIndex = $columnIndex;
    }

    public function collection(Collection $rows)
    {
        $skipFirstRow = true;

        foreach ($rows as $row) {
            if ($skipFirstRow) {
                $skipFirstRow = false;
                continue;
            }
            
            if (isset($row[$this->columnIndex])) {
                UserData::create([
                    'no_tentera' => $row[1],	
                    'nama' => $row[2],	
                    'kompeni' => $row[3],	
                    'tarikh_lahir' => Date::excelToDateTimeObject($row[4]),	
                    'no_ic_awam' => $row[5],	       
                    'umur' => $row[6],	       
                    'negeri_kelahiran' => $row[7],	
                    'status_perkahwinan' => $row[8],	
                    'jumlah_anak' => $row[9],	
                    'agama' => $row[10],	
                    'bangsa' => $row[11],	
                    'keputusan_SPM' => $row[12],	
                    'kelayakan_akademik_tertinggi' => $row[13],	
                    'bidang_pengajian' => $row[14],	
                    'pusat_pengajian' => $row[15],	
                    'CGPA' => $row[16],	
                    'sukan' => $row[17],	
                    'muzik' => $row[18],	
                    'pekerjaan_sebelum_masuk_tentera' => $row[19],	
                    'bahasa' => $row[20],	
                    'tinggi' => $row[21],	
                    'berat' => $row[22],	
                    'BMI' => $row[23],	
                    'kemahiran_membaca_alquran' => $row[24],	
                    'strength_and_weakness' => $row[25],	
                    'pemilihan_KOR_pilihan_pertama' => $row[26],	
                    'pemilihan_KOR_pilihan_kedua' => $row[27],	
                    'pemilihan_KOR_pilihan_ketiga' => $row[28],	
                    'berminat_menyertai_pasukan_khas' => $row[29],
                ]);
            }
        }
    }
}
