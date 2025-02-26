<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = DB::table('m_barang')->pluck('barang_id')->toArray(); // Mengambil semua barang_id

        $data = [];
        for ($i = 1; $i <= 10; $i++) { // 10 transaksi penjualan
            shuffle($barang); // Mengacak barang agar variasi
            for ($j = 0; $j < 3; $j++) { // 3 barang per transaksi
                $data[] = [
                    'detail_id' => ($i - 1) * 3 + ($j + 1), // Auto increment simulasi
                    'penjualan_id' => $i,
                    'barang_id' => $barang[$j], // Ambil 3 barang acak
                    'harga' => rand(50000, 500000), // Harga acak antara 50rb - 500rb
                    'jumlah' => rand(1, 5), // Jumlah acak antara 1 - 5
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
