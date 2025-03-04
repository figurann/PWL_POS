<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_kode' => 'BRG001',
                'kategori_id' => 1, // Elektronik
                'barang_nama' => 'Televisi',
                'harga_beli' => 500000,
                'harga_jual' => 750000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_kode' => 'BRG002',
                'kategori_id' => 2, // Pakaian
                'barang_nama' => 'Kaos',
                'harga_beli' => 20000,
                'harga_jual' => 30000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_kode' => 'BRG003',
                'kategori_id' => 3, // Makanan
                'barang_nama' => 'Snack',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_kode' => 'BRG004',
                'kategori_id' => 4, // Kecantikan
                'barang_nama' => 'Lipstik',
                'harga_beli' => 30000,
                'harga_jual' => 50000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_kode' => 'BRG005',
                'kategori_id' => 2, // Pakaian
                'barang_nama' => 'Sepatu',
                'harga_beli' => 200000,
                'harga_jual' => 300000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_kode' => 'BRG006',
                'kategori_id' => 1, // Elektronik
                'barang_nama' => 'Kursi',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_kode' => 'BRG007',
                'kategori_id' => 5, // Olahraga
                'barang_nama' => 'Buku',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_kode' => 'BRG008',
                'kategori_id' => 3, // Makanan
                'barang_nama' => 'Minuman',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_kode' => 'BRG009',
                'kategori_id' => 5, // Olahraga
                'barang_nama' => 'Peralatan Olahraga',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_kode' => 'BRG010',
                'kategori_id' => 4, // Kecantikan
                'barang_nama' => 'Parfum',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('m_barang')->insert($data);

    }
}
