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
        // Ambil semua kategori bertipe 'article'
        $categories = DB::table('categories')->where('Category_type', 'article')->get();

        // Query semua artikel
        $articlesQuery = DB::table('articles')
            ->join('categories', 'articles.Category_ID', '=', 'categories.Category_ID')
            ->select('articles.*', 'categories.Name as CategoryName');

        if ($request->has('category')) {
            $articlesQuery->where('categories.Name', $request->input('category'));
        }

        // Eksekusi query
        $articles = $articlesQuery->get();


        // test controller
        // dd($categories, $articles);

        return view('Artikel', [
            'categories' => $categories,
            'articles' => $articles,
        ]);
    }
}
