<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\BaseResponse;

class ProductController
{
    public function index()
    {
        return BaseResponse::send(200, 'success', 'Data produk berhasil diambil', Product::all());
    }

    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return BaseResponse::send(404, 'error', 'Produk tidak ditemukan', null, 'Not Found');
        }
        return BaseResponse::send(200, 'success', 'Produk ditemukan', $product);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Name' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'Price' => 'required|numeric',
            'Stock' => 'required|integer',
            'Category_ID' => 'required|exists:categories,Category_ID',
            'Image_path' => 'nullable|string|max:255',
            'Link_tokped' => 'nullable|string|max:255',
        ]);

        $product = Product::create($validated);

        return BaseResponse::send(201, 'success', 'Produk berhasil dibuat', $product);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return BaseResponse::send(404, 'error', 'Produk tidak ditemukan', null, 'Not Found');
        }

        $validated = $request->validate([
            'Name' => 'sometimes|string|max:255',
            'Description' => 'nullable|string',
            'Price' => 'sometimes|numeric',
            'Stock' => 'sometimes|integer',
            'Category_ID' => 'sometimes|exists:categories,Category_ID',
            'Image_path' => 'nullable|string|max:255',
            'Link_tokped' => 'nullable|string|max:255',
        ]);

        $product->update($validated);

        return BaseResponse::send(200, 'success', 'Produk berhasil diperbarui', $product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return BaseResponse::send(404, 'error', 'Produk tidak ditemukan', null, 'Not Found');
        }

        $product->delete();

        return BaseResponse::send(200, 'success', 'Produk berhasil dihapus');
    }
}
