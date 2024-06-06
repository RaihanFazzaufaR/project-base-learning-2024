<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendudukModel;
use App\Models\PermintaanSuratModel;
use App\Models\SuratModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\PindahPendudukModel;

class PersuratanController extends Controller
{
    public function index()
{
    $page = 'daftarPersuratan';
    $selected = 'Persuratan';

    $dataSurat = SuratModel::orderBy('tb_surat.minta_tanggal', 'desc')
        ->paginate(10);

        $data = SuratModel::select('tb_penduduk.id_kartuKeluarga')
        ->join('tb_penduduk', 'tb_surat.peminta_id', '=', 'tb_penduduk.id_penduduk')
        ->get();
    
    // dd($dataSurat[0]->pindahPenduduk[0]->penduduk->nama);
    // // Retrieve all distinct id_kartuKeluarga from dataSurat
    // $idKartuKeluarga = $data->pluck('id_kartuKeluarga')->unique()->toArray();
    
    // // Retrieve detailed moving data for all id_kartuKeluarga
    // $detailpindah = PindahPendudukModel::whereIn('id_foreign_kk', $idKartuKeluarga)
    //     ->join('tb_penduduk', 'tb_pindahpenduduk.id_foreign_penduduk', '=', 'tb_penduduk.id_penduduk')
    //     ->select('tb_pindahpenduduk.*', 'tb_penduduk.nik', 'tb_penduduk.nama')
    //     ->get();

    // Retrieve all distinct id_foreign_surat from dataSurat
    

    // Retrieve detailed moving data for all id_kartuKeluarga
    // $detailpindah = PindahPendudukModel::whereIn('id_foreign_surat', $idForeignSurat)
    //     ->join('tb_penduduk', 'tb_pindahpenduduk.id_foreign_penduduk', '=', 'tb_penduduk.id_penduduk')
    //     ->select('tb_pindahpenduduk.*', 'tb_penduduk.nik', 'tb_penduduk.nama')
    //     ->get();

    // Now $detailpindah contains detailed moving data for each family

    return view('Admin.Persuratan.index', compact('dataSurat', 'page', 'selected'));
}


    public function ajuanPersuratan()
    {
        $page = 'ajuanPersuratan';
        $selected = 'Persuratan';
    
        $permintaanSurat = PermintaanSuratModel::select('tb_permintaansurat.*', 'tb_penduduk.nama', 'tb_template.jenisSurat')
        ->join('tb_penduduk', 'tb_permintaansurat.peminta_id', '=', 'tb_penduduk.id_penduduk')
        ->join('tb_template', 'tb_permintaansurat.template_id', '=', 'tb_template.template_id')
        // ->where('tb_permintaansurat.status', 'menunggu') 
        ->orderBy('tb_permintaansurat.minta_tanggal', 'desc') 
        ->paginate(10);

        // Return the view and pass the $permintaanSurat data, along with $page and $selected variables
        return view('Admin.Persuratan.ajuanSurat', compact('permintaanSurat', 'page', 'selected'));
    }
    
    public function templateSurat()
    {
        $page = 'templateSurat';
        $selected = 'Persuratan';

        $user = PendudukModel::paginate(10);

        return view('Admin.Persuratan.templateSurat', compact('user', 'page', 'selected'));
    }
    
}
