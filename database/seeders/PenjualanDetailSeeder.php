<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data in t_penjualan_detail table
        DB::table('t_penjualan_detail')->truncate();

        // Get all penjualan_id values from t_penjualan table
        $penjualanIds = DB::table('t_penjualan')->pluck('penjualan_id')->toArray();

        // Get all barang_id values from m_barang table
        $barangIds = DB::table('m_barang')->pluck('barang_id')->toArray();

        // Define the number of transactions and items per transaction
        $numTransactions = 10; // Total transactions
        $itemsPerTransaction = 3; // Items per transaction

        // Prepare data array
        $data = [];
        for ($i = 0; $i < $numTransactions; $i++) {
            // Randomly select 3 unique barang_id values for each transaction
            $selectedBarangIds = array_rand(array_flip($barangIds), $itemsPerTransaction);

            foreach ($selectedBarangIds as $barangId) {
                $data[] = [
                    'penjualan_id' => $penjualanIds[$i],
                    'barang_id' => $barangId,
                    'harga' => rand(1000, 100000), // Random price
                    'jumlah' => rand(1, 10), // Random quantity
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
        }

        // Insert data into t_penjualan_detail table
        DB::table('t_penjualan_detail')->insert($data);

    }
}
