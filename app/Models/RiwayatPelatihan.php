<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPelatihan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pelatihan';

    protected $fillable = [
        'biodata_id',
        'nama_pelatihan',
        'institusi',
        'tanggal_mulai',
        'tanggal_selesai',
        // tambahkan field lainnya sesuai kebutuhan
    ];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class);
    }
}
