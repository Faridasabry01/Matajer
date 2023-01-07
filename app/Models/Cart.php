<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['total_price', 'num_of_items', "user_id"];

    public function Product()
    {
        return $this->belongsToMany(Product::class, 'cart_product')->withPivot("id", "product_id", "cart_id", "quantity");
    }
    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
