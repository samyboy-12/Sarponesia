<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        // Fungsi untuk mengambil category yang dipilih
        $selectedCategory = $request->query('category');
    
        // Jika category dipilih, maka ambil artikel yang memiliki kategori yang dipilih
        if ($selectedCategory) {
            $articles = Article::whereHas('category', function ($query) use ($selectedCategory) {
                $query->where('Name', $selectedCategory);
            })->get();
        } else {
            $articles = Article::all();
        }

        return view('Artikel', compact('articles', 'selectedCategory'));
    }
}
