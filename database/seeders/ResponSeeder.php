<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['aduan_id'=> 1, 'perespon_id'=> 2, 'konten_respon'=>'Pohon sudah diangkat', 'image'=>'testrespon.jpeg', 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 2, 'perespon_id'=> 1, 'konten_respon'=>'Jalan sudah diperbaiki', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 3, 'perespon_id'=> 2, 'konten_respon'=>'Baik akan segera kami kerjakan', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 3, 'perespon_id'=> 4, 'konten_respon'=>'Lampu sudah diganti', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 4, 'perespon_id'=> 1, 'konten_respon'=>'Baik akan segera kami kerjakan', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 31, 'perespon__id' => 4, 'konten_respon'=>'Baik akan segera kami laporan', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 32, 'perespon_id'=> 4, 'konten_respon'=>'Sudah kami kerjakan', 'image'=>'testrespon.jpeg', 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 33, 'perespon_id'=> 4, 'konten_respon'=>'Jalan Cokrokusumo tidak ada pada daerah kami', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 34, 'perespon_id'=> 2, 'konten_respon'=>'Baik akan segera kami laporan', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 35, 'perespon_id'=> 2, 'konten_respon'=>'Sudah kami kerjakan', 'image'=>'testrespon.jpeg', 'dibuat_tanggal'=>'2024-04-05'],
            ['aduan_id'=> 36, 'perespon_id'=> 1, 'konten_respon'=>'Jalan Cokrokusumo tidak ada pada daerah kami', 'image'=>null, 'dibuat_tanggal'=>'2024-04-05']
        ];
        DB::table('tb_respon')->insert($data);
    }
}
