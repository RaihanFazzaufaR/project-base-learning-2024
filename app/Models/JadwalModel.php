<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JadwalModel extends Model
{
    use HasFactory;

    protected $table = 'tb_jadwal';

    protected $primaryKey = 'jadwal_id';

    protected $fillable = [
        'judul',
        'aktivitas_tipe',
        'mulai_tanggal',
        'akhir_tanggal',
        'mulai_waktu',
        'akhir_waktu',
        'konten',
        'pembuat_id',
        'status',
        'iuran',
        'lokasi',
        'alasan_tolak',
    ];

    public function penduduk() : BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'pembuat_id', 'id_penduduk');
    }

    public function pengumuman() : HasOne
    {
        return $this->hasOne(PengumumanModel::class, 'jadwal_id', 'pengumuman_id');
    }
}
