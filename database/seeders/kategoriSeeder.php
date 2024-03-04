<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_nama' => 'Electronics',
                'kategori_kode' => 1001,
            ],
            [
                'kategori_id' => 2,
                'kategori_nama' => 'Clothing',
                'kategori_kode' => 1002,
            ],
            [
                'kategori_id' => 3,
                'kategori_nama' => 'Books',
                'kategori_kode' => 1003,
            ],
            [
                'kategori_id' => 4,
                'kategori_nama' => 'Furniture',
                'kategori_kode' => 1004,
            ],
            [
                'kategori_id' => 5,
                'kategori_nama' => 'Toys',
                'kategori_kode' => 1005,
            ],
        ];

        DB::table('m_kategori')->insert($data); // Ganti 'categories' sesuai dengan nama tabel yang sebenarnya
    }
}
