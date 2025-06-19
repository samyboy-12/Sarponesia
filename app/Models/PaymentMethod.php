<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'details', 'is_active'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'payment_method_id', 'id');
    }
}