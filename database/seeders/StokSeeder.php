<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stock_id' => 1,
                'barang_id' => 1,
                'user_id' => 1,
                'stock_tanggal' => now(),
                'stock_jumlah' => 50,
            ],
            [
                'stock_id' => 2,
                'barang_id' => 2,
                'user_id' => 2,
                'stock_tanggal' => now(),
                'stock_jumlah' => 100,
            ],
            [
                'stock_id' => 3,
                'barang_id' => 3,
                'user_id' => 3,
                'stock_tanggal' => now(),
                'stock_jumlah' => 30,
            ],
            [
                'stock_id' => 4,
                'barang_id' => 4,
                'user_id' => 1,
                'stock_tanggal' => now(),
                'stock_jumlah' => 20,
            ],
            [
                'stock_id' => 5,
                'barang_id' => 5,
                'user_id' => 2,
                'stock_tanggal' => now(),
                'stock_jumlah' => 80,
            ],
            [
                'stock_id' => 6,
                'barang_id' => 1,
                'user_id' => 2,
                'stock_tanggal' => now(),
                'stock_jumlah' => 70,
            ],
            [
                'stock_id' => 7,
                'barang_id' => 2,
                'user_id' => 3,
                'stock_tanggal' => now(),
                'stock_jumlah' => 120,
            ],
            [
                'stock_id' => 8,
                'barang_id' => 3,
                'user_id' => 1,
                'stock_tanggal' => now(),
                'stock_jumlah' => 40,
            ],
            [
                'stock_id' => 9,
                'barang_id' => 4,
                'user_id' => 2,
                'stock_tanggal' => now(),
                'stock_jumlah' => 25,
            ],
            [
                'stock_id' => 10,
                'barang_id' => 5,
                'user_id' => 3,
                'stock_tanggal' => now(),
                'stock_jumlah' => 90,
            ],
            
        ];

        DB::table('t_stock')->insert($data);
    }
}
