<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        // Mengambil data produk yang tersedia
        $product = \App\Models\Product::inRandomOrder()->first();

        return [
            'user_id' => \App\Models\User::factory(),
            'product_id' => $product->id,
            'quantity' => $this->faker->numberBetween(1, $product->amount), // "quantity" mengikuti jumlah produk yang tersedia
            'total_price' => $product->price * $this->faker->numberBetween(1, $product->amount), // Menghitung total harga berdasarkan harga produk dan quantity
            'product_name' => $product->name, // Menyimpan nama produk
            'product_price' => $product->price, // Menyimpan harga produk
            'product_color' => $product->color, // Menyimpan warna produk
            'product_brand' => $product->brand, // Menyimpan merek produk
            'product_size' => $product->size, // Menyimpan ukuran produk
        ];
    }
}
