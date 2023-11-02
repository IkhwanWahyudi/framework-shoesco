<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $fillable = ['user_id', 'product_id', 'quantity', 'total_price', 'product_name', 'product_price', 'product_color', 'product_brand', 'product_size'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function productName(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_name');
    }

    public function productPrice(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_price');
    }

    public function productColor(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_color');
    }

    public function productBrand(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_brand');
    }

    public function productSize(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_size');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
