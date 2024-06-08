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
       
        $data= [
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
            //bulan februari
            //bulan maret
            //bulan april
            //bulan mei
            //bulan juni
        ];
        DB::table('tb_ajuan_bansos')->insert($data);
        // Sample data

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