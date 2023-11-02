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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->integer('quantity');
            $table->integer('total_price');
            $table->string('product_name'); // Kolom untuk menyimpan nama produk
            $table->integer('product_price'); // Kolom untuk menyimpan harga produk
            $table->string('product_color'); // Kolom untuk menyimpan warna produk
            $table->string('product_brand'); // Kolom untuk menyimpan merek produk
            $table->integer('product_size'); // Kolom untuk menyimpan ukuran produk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
