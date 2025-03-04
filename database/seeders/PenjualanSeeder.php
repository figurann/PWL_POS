<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1, // ID pengguna yang sesuai
                'pembeli' => 'John Doe',
                'penjualan_kode' => 'PJL-A1B2',
                'penjualan_tanggal' => Carbon::now()->subDays(30), // 30 hari yang lalu
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Jane Smith',
                'penjualan_kode' => 'PJL-C3D4',
                'penjualan_tanggal' => Carbon::now()->subDays(25), // 25 hari yang lalu
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Alice Johnson',
                'penjualan_kode' => 'PJL-E5F6',
                'penjualan_tanggal' => Carbon::now()->subDays(20), // 20 hari yang lalu
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Bob Brown',
                'penjualan_kode' => 'PJL-G7H8',
                'penjualan_tanggal' => Carbon::now()->subDays(15), // 15 hari yang lalu
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Charlie Davis',
                'penjualan_kode' => 'PJL-I9J0',
                'penjualan_tanggal' => Carbon::now()->subDays(10), // 10 hari yang lalu
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Eve White',
                'penjualan_kode' => 'PJL-K1L2',
                'penjualan_tanggal' => Carbon::now()->subDays(5), // 5 hari yang lalu
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Frank Black',
                'penjualan_kode' => 'PJL-M3N4',
                'penjualan_tanggal' => Carbon::now()->subDays(3), // 3 hari yang lalu
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Grace Green',
                'penjualan_kode' => 'PJL-O5P6',
                'penjualan_tanggal' => Carbon::now()->subDays(2), // 2 hari yang lalu
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Hank Blue',
                'penjualan_kode' => 'PJL-Q7R8',
                'penjualan_tanggal' => Carbon::now()->subDays(1), // 1 hari yang lalu
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Ivy Red',
                'penjualan_kode' => 'PJL-S9T0',
                'penjualan_tanggal' => Carbon::now(), // Hari ini
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data);

    }
}
