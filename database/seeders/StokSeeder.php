<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 11, // Televisi
                'user_id' => 1, // ID pengguna yang sesuai
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id' => 12, // Kaos
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id' => 13, // Snack
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id' => 14, // Lipstik
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id' => 15, // Sepatu
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id' => 16, // Kursi
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id' => 17, // Buku
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id' => 18, // Minuman
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id' => 19, // Peralatan Olahraga
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 80,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'barang_id' => 20, // Parfum
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('t_stok')->insert($data);

    }
}
