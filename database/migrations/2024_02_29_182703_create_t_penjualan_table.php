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
        Schema::create('t_penjualan', function (Blueprint $table) {
            //primary key penjualan_id
            $table->id('penjualan_id');
            //foreign key user_id
            $table->foreignId('user_id');
            //pembeli
            $table->string('pembeli');
            //penjualan_kode
            $table->string('penjualan_kode');
            //penjualan_tanggal
            $table->datetime('penjualan_tanggal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
