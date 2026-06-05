<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'harga',
        'deskripsi',
        'supplier',
        'merk',
        'stok',
    ];

    protected $hidden = [
        'merk'
    ];
}
