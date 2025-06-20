<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'quantity'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'User_ID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'Product_ID');
    }
}