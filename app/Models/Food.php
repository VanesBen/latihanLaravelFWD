<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{

    use SoftDeletes;

    protected $table = 'food';

    // protected $primaryKey = 'id' gaperlu tulis kalo colom nya id

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category'
    ];
    
    protected $hidden = [
        'created_at',

    ];

    // untuk define colom mana aja yang perlu di casting tipe adata nya
    // protected $cast = [
    //     'created_at',
    // ];

    protected $casts = ['deleted_at' => 'datetime'];

}
