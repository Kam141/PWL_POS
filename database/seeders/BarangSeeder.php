<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Kaos Polos', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'B002', 'barang_nama' => 'Kemeja Batik', 'harga_beli' => 120000, 'harga_jual' => 150000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'C001', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'C002', 'barang_nama' => 'Celana Chino', 'harga_beli' => 180000, 'harga_jual' => 220000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'S001', 'barang_nama' => 'Sneakers Putih', 'harga_beli' => 350000, 'harga_jual' => 450000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'S002', 'barang_nama' => 'Sepatu Formal', 'harga_beli' => 400000, 'harga_jual' => 500000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'A001', 'barang_nama' => 'Topi Baseball', 'harga_beli' => 75000, 'harga_jual' => 100000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'A002', 'barang_nama' => 'Jam Tangan', 'harga_beli' => 500000, 'harga_jual' => 650000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'E001', 'barang_nama' => 'Headphone Bluetooth', 'harga_beli' => 300000, 'harga_jual' => 400000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'E002', 'barang_nama' => 'Smartwatch', 'harga_beli' => 800000, 'harga_jual' => 1000000],
        ];

        DB::table('m_barang')->insert($data);
        
    }
}
