<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $primaryKey = 'Article_ID';

    protected $fillable = [
        'Title',
        'Content',
        'Category_ID',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'Category_ID', 'Category_ID');
    }
}
