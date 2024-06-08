<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class AjuanBansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $data = [
            //bulan januari
            [
                'id_kartuKeluarga' => 2,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => '3',
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-01',
                'updated_at' => '2024-01-01',
            ],
            [
                'id_kartuKeluarga' => 3,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => '4',
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '>300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-01',
                'updated_at' => '2024-01-21',

            ],
            [
                'id_kartuKeluarga' => 4,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => '2',
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '20m - 40m',
                'pengeluaran_listrik' => '50.000 - 100.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-01',
                'updated_at' => '2024-01-21',
            ],
            [
                'id_kartuKeluarga' => 5,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => '1',
                'penghasilan_keluarga' => '<1.000.000',
                'luas_tempat_tinggal' => '<20m',
                'pengeluaran_listrik' => '<50.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-01',
                'updated_at' => '2024-01-21',
            ],
            [
                'id_kartuKeluarga' => 6,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => '5',
                'penghasilan_keluarga' => '3.000.000 - 4.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-01',
                'updated_at' => '2024-01-21',
            ],
            [
                'id_kartuKeluarga' => 7,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => '2',
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '20m - 40m',
                'pengeluaran_listrik' => '50.000 - 100.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-01',
                'updated_at' => '2024-01-21',
            ],
            [
                'id_kartuKeluarga' => 8,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => '3',
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-05',
                'updated_at' => '2024-01-21',
            ],
            [
                'id_kartuKeluarga' => 9,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => '4',
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '>300.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-05',
                'updated_at' => '2024-01-21',
            ],
            [
                'id_kartuKeluarga' => 10,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => '2',
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '20m - 40m',
                'pengeluaran_listrik' => '50.000 - 100.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-05',
                'updated_at' => '2024-01-21',
            ],
            [
                'id_kartuKeluarga' => 11,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => '1',
                'penghasilan_keluarga' => '<1.000.000',
                'luas_tempat_tinggal' => '<20m',
                'pengeluaran_listrik' => '<50.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-07',
                'updated_at' => '2024-01-22',
            ],
            [
                'id_kartuKeluarga' => 12,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => '2',
                'penghasilan_keluarga' => '3.000.000 - 4.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-08',
                'updated_at' => '2024-01-22',
            ],
            [
                'id_kartuKeluarga' => 13,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => '2',
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '20m - 40m',
                'pengeluaran_listrik' => '50.000 - 100.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-09',
                'updated_at' => '2024-01-22',
            ],
            [
                'id_kartuKeluarga' => 26,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => '3',
                'penghasilan_keluarga' => '4.000.000 - 5.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-10',
                'updated_at' => '2024-01-28',
            ],
            [
                'id_kartuKeluarga' => 27,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => '1',
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '20m - 40m',
                'pengeluaran_listrik' => '>300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-10',
                'updated_at' => '2024-01-28',

            ],
            [
                'id_kartuKeluarga' => 28,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => '2',
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '50.000 - 100.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-10',
                'updated_at' => '2024-01-30',
            ],
            [
                'id_kartuKeluarga' => 29,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => '3',
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '<20m',
                'pengeluaran_listrik' => '<50.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-10',
                'updated_at' => '2024-01-30',
            ],
            [
                'id_kartuKeluarga' => 30,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => '5',
                'penghasilan_keluarga' => '3.000.000 - 4.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-10',
                'updated_at' => '2024-01-30',
            ],
            [
                'id_kartuKeluarga' => 31,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => '4',
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '20m - 40m',
                'pengeluaran_listrik' => '50.000 - 100.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-01-10',
                'updated_at' => '2024-01-30',
            ],
            //bulan februari
            //bulan maret
            //bulan april

            [
                'id_kartuKeluarga' => 2,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '20m - 40m',
                'pengeluaran_listrik' => '50.000 - 100.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-01',
                'updated_at' => '2024-04-20'
            ],
            [
                'id_kartuKeluarga' => 3,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => 3,
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-04',
                'updated_at' => '2024-04-21'
            ],
            [
                'id_kartuKeluarga' => 4,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '3.000.000 - 4.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-05',
                'updated_at' => '2024-04-22'
            ],
            [
                'id_kartuKeluarga' => 5,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => 1,
                'penghasilan_keluarga' => '<1.000.000',
                'luas_tempat_tinggal' => '<20m',
                'pengeluaran_listrik' => '<50.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-07',
                'updated_at' => '2024-04-23'
            ],
            [
                'id_kartuKeluarga' => 6,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => 3,
                'penghasilan_keluarga' => '4.000.000 - 5.000.000',
                'luas_tempat_tinggal' => '20m - 40m',
                'pengeluaran_listrik' => '50.000 - 100.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-08',
                'updated_at' => '2024-04-24'
            ],
            [
                'id_kartuKeluarga' => 7,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '>5.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-09',
                'updated_at' => '2024-04-25'
            ],
            [
                'id_kartuKeluarga' => 8,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => 3,
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-10',
                'updated_at' => '2024-04-26'
            ],
            [
                'id_kartuKeluarga' => 9,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '20m - 40m',
                'pengeluaran_listrik' => '50.000 - 100.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-11',
                'updated_at' => '2024-04-27'
            ],
            [
                'id_kartuKeluarga' => 10,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => 1,
                'penghasilan_keluarga' => '3.000.000 - 4.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-12',
                'updated_at' => '2024-04-28'
            ],
            [
                'id_kartuKeluarga' => 11,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => 3,
                'penghasilan_keluarga' => '<1.000.000',
                'luas_tempat_tinggal' => '<20m',
                'pengeluaran_listrik' => '<50.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-13',
                'updated_at' => '2024-04-25'
            ],
            [
                'id_kartuKeluarga' => 12,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-14',
                'updated_at' => '2024-04-22'
            ],
            [
                'id_kartuKeluarga' => 13,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => 1,
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-15',
                'updated_at' => '2024-04-23'
            ],
            [
                'id_kartuKeluarga' => 14,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '3.000.000 - 4.000.000',
                'luas_tempat_tinggal' => '<20m',
                'pengeluaran_listrik' => '<50.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-16',
                'updated_at' => '2024-04-24'
            ],
            [
                'id_kartuKeluarga' => 15,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => 3,
                'penghasilan_keluarga' => '4.000.000 - 5.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-17',
                'updated_at' => '2024-04-25'
            ],
            [
                'id_kartuKeluarga' => 16,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '>5.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-18',
                'updated_at' => '2024-04-26'
            ],
            [
                'id_kartuKeluarga' => 17,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => 3,
                'penghasilan_keluarga' => '<1.000.000',
                'luas_tempat_tinggal' => '<20m',
                'pengeluaran_listrik' => '<50.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-11',
                'updated_at' => '2024-04-27'
            ],
            [
                'id_kartuKeluarga' => 18,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-20',
                'updated_at' => '2024-04-28'
            ],
            [
                'id_kartuKeluarga' => 19,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => 1,
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-15',
                'updated_at' => '2024-04-24'
            ],
            [
                'id_kartuKeluarga' => 20,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '3.000.000 - 4.000.000',
                'luas_tempat_tinggal' => '<20m',
                'pengeluaran_listrik' => '<50.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-13',
                'updated_at' => '2024-04-22'
            ],
            [
                'id_kartuKeluarga' => 21,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => 3,
                'penghasilan_keluarga' => '4.000.000 - 5.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-14',
                'updated_at' => '2024-04-23'
            ],
            [
                'id_kartuKeluarga' => 22,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '>5.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-16',
                'updated_at' => '2024-04-25'
            ],
            [
                'id_kartuKeluarga' => 23,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => 3,
                'penghasilan_keluarga' => '<1.000.000',
                'luas_tempat_tinggal' => '<20m',
                'pengeluaran_listrik' => '<50.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-17',
                'updated_at' => '2024-04-26'
            ],
            [
                'id_kartuKeluarga' => 24,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-13',
                'updated_at' => '2024-04-27'
            ],
            [
                'id_kartuKeluarga' => 25,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => 1,
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-19',
                'updated_at' => '2024-04-28'
            ],
            [
                'id_kartuKeluarga' => 26,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '3.000.000 - 4.000.000',
                'luas_tempat_tinggal' => '<20m',
                'pengeluaran_listrik' => '<50.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-06',
                'updated_at' => '2024-04-25'
            ],
            [
                'id_kartuKeluarga' => 27,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => 3,
                'penghasilan_keluarga' => '4.000.000 - 5.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-21',
                'updated_at' => '2024-04-26'
            ],
            [
                'id_kartuKeluarga' => 28,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '>5.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-09',
                'updated_at' => '2024-04-27'
            ],
            [
                'id_kartuKeluarga' => 29,
                'status_rumah' => 'Kontrak/kos',
                'tanggungan' => 3,
                'penghasilan_keluarga' => '<1.000.000',
                'luas_tempat_tinggal' => '<20m',
                'pengeluaran_listrik' => '<50.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-10',
                'updated_at' => '2024-04-28'
            ],
            [
                'id_kartuKeluarga' => 30,
                'status_rumah' => 'Tinggal dengan keluarga',
                'tanggungan' => 2,
                'penghasilan_keluarga' => '1.000.000 - 2.000.000',
                'luas_tempat_tinggal' => '40m - 60m',
                'pengeluaran_listrik' => '100.000 - 200.000',
                'status' => 'diterima',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-11',
                'updated_at' => '2024-04-25'
            ],
            [
                'id_kartuKeluarga' => 31,
                'status_rumah' => 'Milik sendiri',
                'tanggungan' => 1,
                'penghasilan_keluarga' => '2.000.000 - 3.000.000',
                'luas_tempat_tinggal' => '60m - 80m',
                'pengeluaran_listrik' => '200.000 - 300.000',
                'status' => 'ditolak',
                'foto_rumah' => 'contoh-foto-rumah.jpg',
                'SKTM' => 'contoh-sktm.jpg',
                'created_at' => '2024-04-14',
                'updated_at' => '2024-04-26'
            ],

            //bulan mei
            //bulan juni
        ];
        DB::table('tb_ajuan_bansos')->insert($data);
        // Sample data
        $status_rumah = ['Kontrak/kos', 'Tinggal dengan keluarga', 'Milik sendiri'];
        $tanggungan = ['1', '2', '3', '4', '5', '>5'];
        $penghasilan_keluarga = ['<1.000.000', '1.000.000 - 2.000.000', '2.000.000 - 3.000.000', '3.000.000 - 4.000.000', '4.000.000 - 5.000.000', '>5.000.000'];
        $luas_tempat_tinggal = ['<20m', '20m - 40m', '40m - 60m', '60m - 80m', '>80m'];
        $pengeluaran_listrik = ['<50.000', '50.000 - 100.000', '100.000 - 200.000', '200.000 - 300.000', '>300.000'];
        $status = ['diterima', 'ditolak'];
        $foto_rumah = 'Rumah/contoh-foto-rumah.jpg';
        $SKTM = 'SKTM/contoh-foto-sktm.jpg';

        for ($id_kartuKeluarga = 2; $id_kartuKeluarga <= 31; $id_kartuKeluarga++) {
            $created_at = Carbon::create(2024, 2, rand(1, 20));
            $updated_at = Carbon::create(2024, 2, rand(21, 29));
            $status_ajuan = $status[array_rand($status)];

            if ($status_ajuan == 'ditolak') {
                $status_rumah_isi = 'Milik sendiri';
                $tanggungan_isi = rand(1, 2);
                $penghasilan_keluarga_isi = ['2.000.000 - 3.000.000', '3.000.000 - 4.000.000', '4.000.000 - 5.000.000', '>5.000.000'][array_rand(['2.000.000 - 3.000.000', '3.000.000 - 4.000.000', '4.000.000 - 5.000.000', '>5.000.000'])];
                $luas_tempat_tinggal_isi = ['40m - 60m', '60m - 80m', '>80m'][array_rand(['40m - 60m', '60m - 80m', '>80m'])];
                $pengeluaran_listrik_isi = ['100.000 - 200.000', '200.000 - 300.000', '>300.000'][array_rand(['100.000 - 200.000', '200.000 - 300.000', '>300.000'])];
            } else {
                $status_rumah_isi = $status_rumah[array_rand($status_rumah)];
                $tanggungan_isi = $tanggungan[array_rand($tanggungan)];
                $penghasilan_keluarga_isi = $penghasilan_keluarga[array_rand($penghasilan_keluarga)];
                $luas_tempat_tinggal_isi = $luas_tempat_tinggal[array_rand($luas_tempat_tinggal)];
                $pengeluaran_listrik_isi = $pengeluaran_listrik[array_rand($pengeluaran_listrik)];
            }

            DB::table('tb_ajuan_bansos')->insert([
                'id_kartuKeluarga' => $id_kartuKeluarga,
                'status_rumah' => $status_rumah_isi,
                'tanggungan' => (string) $tanggungan_isi,
                'penghasilan_keluarga' => $penghasilan_keluarga_isi,
                'luas_tempat_tinggal' => $luas_tempat_tinggal_isi,
                'pengeluaran_listrik' => $pengeluaran_listrik_isi,
                'status' => $status_ajuan,
                'foto_rumah' => $foto_rumah,
                'SKTM' => $SKTM,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        }
        // $faker = Faker::create();

        // $start_date = '2023-01-01';
        // $end_date = '2024-06-06';

        // foreach (range(1, 500) as $index) {
        //     $idKartuKeluarga = $faker->numberBetween(2, 31); // Ubah 31 sesuai dengan jumlah data di tabel tb_kartukeluarga

        //     $created_at = $faker->dateTimeBetween($start_date, $end_date)->format('Y-m-d');

        //     $status = ($created_at >= '2024-06-01') ? 'diproses' : $faker->randomElement(['diproses', 'diterima']);

        //     DB::table('tb_ajuan_bansos')->insert([
        //         'id_kartuKeluarga' => $idKartuKeluarga,
        //         'status_rumah' => $faker->randomElement(['Kontrak/kos', 'Tinggal dengan keluarga', 'Milik sendiri']),
        //         'tanggungan' => $faker->randomElement(['1', '2', '3', '4', '5', '>5']),
        //         'penghasilan_keluarga' => $faker->randomElement(['<1.000.000', '1.000.000 - 2.000.000', '2.000.000 - 3.000.000', '3.000.000 - 4.000.000', '4.000.000 - 5.000.000', '>5.000.000']),
        //         'luas_tempat_tinggal' => $faker->randomElement(['<20m', '20m - 40m', '40m - 60m', '60m - 80m', '>80m']),
        //         'pengeluaran_listrik' => $faker->randomElement(['<50.000', '50.000 - 100.000', '100.000 - 200.000', '200.000 - 300.000', '>300.000']),
        //         'status' => $status,
        //         'foto_rumah' => 'contoh-foto-rumah.jpg', 
        //         'SKTM' => 'contoh-sktm.jpg', 
        //         'created_at' => $created_at,
        //         'updated_at' => now(),
        //     ]);
        // }
    }
}