<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'Ali', 'penjualan_kode' => 'TRX001', 'penjualan_tanggal' => '2024-02-01 10:00:00'],
            ['penjualan_id' => 2, 'user_id' => 2, 'pembeli' => 'Budi', 'penjualan_kode' => 'TRX002', 'penjualan_tanggal' => '2024-02-02 11:30:00'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Citra', 'penjualan_kode' => 'TRX003', 'penjualan_tanggal' => '2024-02-03 14:00:00'],
            ['penjualan_id' => 4, 'user_id' => 1, 'pembeli' => 'Dewi', 'penjualan_kode' => 'TRX004', 'penjualan_tanggal' => '2024-02-04 15:20:00'],
            ['penjualan_id' => 5, 'user_id' => 2, 'pembeli' => 'Eko', 'penjualan_kode' => 'TRX005', 'penjualan_tanggal' => '2024-02-05 16:45:00'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Fajar', 'penjualan_kode' => 'TRX006', 'penjualan_tanggal' => '2024-02-06 09:10:00'],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'Gita', 'penjualan_kode' => 'TRX007', 'penjualan_tanggal' => '2024-02-07 12:30:00'],
            ['penjualan_id' => 8, 'user_id' => 2, 'pembeli' => 'Hadi', 'penjualan_kode' => 'TRX008', 'penjualan_tanggal' => '2024-02-08 13:50:00'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Indra', 'penjualan_kode' => 'TRX009', 'penjualan_tanggal' => '2024-02-09 17:15:00'],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'Joko', 'penjualan_kode' => 'TRX010', 'penjualan_tanggal' => '2024-02-10 18:40:00'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
