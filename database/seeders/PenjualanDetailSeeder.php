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
        $data = [];

        // Loop untuk membuat 30 data detail penjualan
        for ($i = 1; $i <= 30; $i++) {
            $data[] = [
                'penjualan_id' => rand(1, 10), // Penjualan ID acak antara 1 dan 10
                'barang_id' => rand(1, 5), // Barang ID acak antara 1 dan 5
                'harga' => rand(10000, 100000), // Harga acak antara 10.000 dan 100.000
                'jumlah' => rand(1, 5), // Jumlah acak antara 1 dan 5
            ];
        }

        // Memasukkan data ke dalam tabel t_penjualan_detail
        DB::table('t_penjualan_detail')->insert($data);
    }
}
