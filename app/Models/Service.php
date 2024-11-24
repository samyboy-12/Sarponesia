<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $primaryKey = 'Service_ID';

    protected $fillable = [
        'Name',
        'Description',
        'Price',
        'Category_ID',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'Category_ID', 'Category_ID');
    }
}
