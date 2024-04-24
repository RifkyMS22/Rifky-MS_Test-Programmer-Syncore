<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPekerjaan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pekerjaan';

    protected $fillable = [
        'biodata_id',
        'nama_perusahaan',
        'posisi',
        'tanggal_masuk',
        'tanggal_keluar',
        // tambahkan field lainnya sesuai kebutuhan
    ];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class);
    }
}
