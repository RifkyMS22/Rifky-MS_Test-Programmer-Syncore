<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanTerakhir extends Model
{
    use HasFactory;
    protected $table = 'pendidikan_terakhir';

    protected $fillable = [
        'biodata_id',
        'jenjang_pendidikan',
        'nama_sekolah',
        'jurusan',
        'tahun_lulus',
        // tambahkan field lainnya sesuai kebutuhan
    ];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class);
    }
}
