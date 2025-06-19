<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'recipient_name',
        'phone',
        'address_line',
        'city',
        'postal_code',
        'is_default',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'User_ID');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'address_id', 'id');
    }
}