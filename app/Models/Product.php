<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setImageAttribute(UploadedFile $file)
    {
        $this->attributes['image'] = $file->store('images');
    }

    public function getImageAttribute()
    {
        return asset($this->attributes['image']);
    }

    public function getPriceFormatAttribute()
    {
        return '$' . $this->attributes['price'];
    }
    
}

