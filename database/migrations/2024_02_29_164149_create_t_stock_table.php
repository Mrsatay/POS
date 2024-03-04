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
        Schema::create('t_stock', function (Blueprint $table) {
            //primary key stock_id
            $table->id('stock_id');
            $table->foreignId('barang_id');
            $table->foreignId('user_id');
            $table->datetime('stock_tanggal');
            $table->integer('stock_jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stock');
    }
};
