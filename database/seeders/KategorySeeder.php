<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'K01',
                'kategori_nama' => 'Baju',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'K02',
                'kategori_nama' => 'Celana',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'K03',
                'kategori_nama' => 'Sepatu',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'K04',
                'kategori_nama' => 'Aksesoris',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'K05',
                'kategori_nama' => 'Elektronik',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
