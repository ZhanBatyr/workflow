<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function subproducts()
    {
        return $this->hasManyThrough(Product::class, Category::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function getAllProductsAttribute()
    {
        return $this->products->merge($this->subproducts);
    }
}
