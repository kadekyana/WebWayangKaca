<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'total',
        'alamat',
        'status',
        '_token',
    ];

            // Contoh aturan validasi di model Order
    public static $rules = [
        'user_id' => 'required',
        'nama' => 'required',
        'total' => 'required',
        'alamat' => 'required',
        'status' => 'required',
    ];

}
