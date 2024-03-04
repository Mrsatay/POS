<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            //detail_id
            $table->id('detail_id');
            //penjualan_id
            $table->foreignId('penjualan_id');
            //barang_id
            $table->foreignId('barang_id');
            //harga
            $table->integer('harga');
            //jumlah
            $table->integer('jumlah');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
