<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['payment_id', 'user_id', 'total_price', 'num_of_items'];

    public function payments()
    {
        return $this->BelongsTo(Payment::class);
    }
    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
