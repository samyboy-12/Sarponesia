<?php

namespace App\Http\Controllers\API;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\BaseResponse;

class ArticleController
{
    // GET /api/articles
    public function index()
    {
        return BaseResponse::send(200, 'success', 'Articles retrieved successfully', Article::all());
    }

    // GET /api/articles/{id}
    public function show($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return BaseResponse::send(404, 'error', 'Article not found', null, 'Not Found');
        }
        return BaseResponse::send(200, 'success', 'Article retrieved successfully', $article);
    }

    // POST /api/articles
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Title' => 'required|string|max:255',
            'Content' => 'required|string',
            'Author' => 'nullable|string|max:255',
            'Category_ID' => 'nullable|exists:categories,Category_ID',
        ]);

        $article = Article::create($validated);

        return BaseResponse::send(201, 'success', 'Article created successfully', $article);
    }

    // PUT /api/articles/{id}
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        if (!$article) {
            return BaseResponse::send(404, 'error', 'Article not found', null, 'Not Found');
        }

        $validated = $request->validate([
            'Title' => 'sometimes|required|string|max:255',
            'Content' => 'sometimes|required|string',
            'Author' => 'nullable|string|max:255',
            'Category_ID' => 'nullable|exists:categories,Category_ID',
        ]);

        $article->update($validated);

        return BaseResponse::send(200, 'success', 'Article updated successfully', $article);
    }

    // DELETE /api/articles/{id}
    public function destroy($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return BaseResponse::send(404, 'error', 'Article not found', null, 'Not Found');
        }

        $article->delete();

        return BaseResponse::send(200, 'success', 'Article deleted successfully');
    }
}
