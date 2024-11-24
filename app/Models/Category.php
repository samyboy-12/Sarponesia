<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'Category_ID';

    protected $fillable = [
        'Name',
        'Description',
        'category_type',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'Category_ID', 'Category_ID');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'Category_ID', 'Category_ID');
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'Category_ID', 'Category_ID');
    }
}
