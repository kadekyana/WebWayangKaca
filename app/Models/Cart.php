<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', // Tambahkan 'user_id' ke dalam daftar fillable
        'product_id',
        'quantity',
    ];

    protected $attributes = [
    'quantity' => 1, // Nilai default untuk 'quantity'
];
    // app/Cart.php
public function product()
{
    return $this->belongsTo(Product::class, 'product_id');
}


}
