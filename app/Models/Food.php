<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
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
    protected $cast = [

    ];

}
