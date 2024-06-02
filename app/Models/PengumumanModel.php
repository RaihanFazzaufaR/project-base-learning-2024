<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PengumumanModel extends Model
{
    use HasFactory;

    protected $table = 'tb_pengumuman';

    protected $primaryKey = 'pengumuman_id';

    protected $fillable = [
        'judul',
        'aktivitas_tipe',
        'mulai_tanggal',
        'akhir_tanggal',
        'mulai_waktu',
        'akhir_waktu',
        'konten',
        'pembuat_id',
        'iuran',
        'lokasi',
    ];

    public function penduduk() : BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'pembuat_id', 'penduduk_id');
    }
}