<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'name',
        'brand_id',
        'category_id',
        'description',
        'min_age',
        'max_age',
        'price',
        'image',
        'stock',
    ];
    protected $hidden = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
