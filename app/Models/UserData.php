<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    protected $table = 'user_data';
    
    protected $fillable = [
        'no_tentera',	
        'nama',	
        'kompeni',	
        'tarikh_lahir',	
        'no_ic_awam',	       
        'umur',	       
        'negeri_kelahiran',	
        'status_perkahwinan',	
        'jumlah_anak',	
        'agama',	
        'bangsa',	
        'keputusan_SPM',	
        'kelayakan_akademik_tertinggi',	
        'bidang_pengajian',	
        'pusat_pengajian',	
        'CGPA',	
        'sukan',	
        'muzik',	
        'pekerjaan_sebelum_masuk_tentera',	
        'bahasa',	
        'tinggi',	
        'berat',	
        'BMI',	
        'kemahiran_membaca_alquran',	
        'strength_and_weakness',	
        'pemilihan_KOR_pilihan_pertama',	
        'pemilihan_KOR_pilihan_kedua',	
        'pemilihan_KOR_pilihan_ketiga',	
        'berminat_menyertai_pasukan_khas',
    ];

    protected $casts = [
        'tarikh_lahir'  => 'date:Y-m-d',
    ];
    
    public function result()
    {
        return $this->hasOne(DataMarkah::class, 'user_data_id');
    }
}
