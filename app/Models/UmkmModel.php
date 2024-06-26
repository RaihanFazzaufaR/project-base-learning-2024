<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UmkmModel extends Model
{
    use HasFactory;

    protected $table = 'tb_umkm';
    protected $primaryKey = 'umkm_id';
    protected $fillable = [
        'nama',
        'id_pemilik',
        'no_wa',
        'lokasi',
        'tipe',
        'buka_waktu',
        'tutup_waktu',
        'deskripsi',
        'lokasi_map',
        'status',
        'foto',
        'tanggal_disetujui',
        'alasan_rw',
        'alasan_warga',
        'tanggal_ditolak'
    ];

    public function penduduk(): BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'id_pemilik', 'id_penduduk');
    }
}