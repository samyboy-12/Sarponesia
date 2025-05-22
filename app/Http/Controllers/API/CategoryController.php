<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\BaseResponse;

class CategoryController
{
    public function index()
    {
        return BaseResponse::send(200, 'success', 'Data kategori berhasil diambil', Category::all());
    }

    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return BaseResponse::send(404, 'error', 'Kategori tidak ditemukan', null, 'Not Found');
        }
        return BaseResponse::send(200, 'success', 'Kategori ditemukan', $category);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Name' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'Category_type' => 'required|string|in:kopi,benih,pupuk,peralatan,layanan,jasa,article',
        ]);

        $category = Category::create($validated);

        return BaseResponse::send(201, 'success', 'Kategori berhasil dibuat', $category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (!$category) {
            return BaseResponse::send(404, 'error', 'Kategori tidak ditemukan', null, 'Not Found');
        }

        $validated = $request->validate([
            'Name' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'Category_type' => 'required|string|in:kopi,benih,pupuk,peralatan,layanan,jasa,article',
        ]);

        $category->update($validated);

        return BaseResponse::send(200, 'success', 'Kategori berhasil diperbarui', $category);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return BaseResponse::send(404, 'error', 'Kategori tidak ditemukan', null, 'Not Found');
        }

        $category->delete();

        return BaseResponse::send(200, 'success', 'Kategori berhasil dihapus');
    }
}
