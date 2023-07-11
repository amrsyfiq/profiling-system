<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMarkah extends Model
{
    use HasFactory;

    protected $table = 'data_markah';

    protected $fillable = [
        'user_data_id',
        'UJIAN_PENDORONG_SENJATA_MARKAH',
        'UJIAN_PENDORONG_SENJATA_GRED',
        'UJIAN_PENDORONG_PERTOLONGAN_CEMAS_MARKAH',
        'UJIAN_PENDORONG_PERTOLONGAN_CEMAS_GRED',
        'UJIAN_PENDORONG_IMP_MARKAH',
        'UJIAN_PENDORONG_IMP_GRED',
        'UJIAN_PENDORONG_BACA_PETA_MARKAH',
        'UJIAN_PENDORONG_BACA_PETA_GRED',
        'UJIAN_PENDORONG_SEMBOYAN_MARKAH',
        'UJIAN_PENDORONG_SEMBOYAN_GRED',
        'PLATUN',
        'SEKSYEN',
        'JANTINA',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_data_id');
    }
}
