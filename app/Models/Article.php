<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'name',
        'id_brand',
        'id_category',
        'description',
        'min_age',
        'max_age',
        'price',
        'image',
        'stock',
    ];
    protected $hidden = [];
}
