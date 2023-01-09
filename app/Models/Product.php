<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Codebyray\ReviewRateable\Contracts\ReviewRateable;
use Codebyray\ReviewRateable\Traits\ReviewRateable as ReviewRateableTrait;

use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class Product extends Model
{

    use HasFactory, Favoriteable,ReviewRateableTrait;

    protected $fillable = [
        'name',
        'price',
        'quantity',
        'brand',
        'image',
        'size',
        'expires_at',
        'desc',
        "category_id"

    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function cart()
    {
        return $this->hasMany(Cart::class, "cart_product");
    }
}
