<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\BaseResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

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
            'Price' => 'required|numeric|min:0',
            'Stock' => 'required|integer|min:0',
            'Category_ID' => 'required|exists:categories,Category_ID',
            'Image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Image required for create
            'Link_tokped' => 'nullable|url|max:255',
        ]);

        if ($request->hasFile('Image')) {
            $path = $request->file('Image')->store('images', 'public');
            $validated['Image_path'] = Storage::url($path);
        }

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
            'Name' => 'sometimes|required|string|max:255',
            'Description' => 'nullable|string',
            'Price' => 'sometimes|required|numeric|min:0',
            'Stock' => 'sometimes|required|integer|min:0',
            'Category_ID' => 'sometimes|required|exists:categories,Category_ID',
            'Image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'Link_tokped' => 'nullable|url|max:255',
        ]);

        // Log incoming request for debugging
        Log::info('Update Request Data:', ['input' => $request->all(), 'files' => $request->hasFile('Image')]);
        Log::info('Validated Data:', $validated);

        if ($request->hasFile('Image')) {
            if ($product->Image_path) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $product->Image_path));
            }
            $path = $request->file('Image')->store('images', 'public');
            $validated['Image_path'] = Storage::url($path);
        }

        $product->update($validated);

        return BaseResponse::send(200, 'success', 'Produk berhasil diperbarui', $product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return BaseResponse::send(404, 'error', 'Produk tidak ditemukan', null, 'Not Found');
        }

        if ($product->Image_path) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $product->Image_path));
        }

        $product->delete();

        return BaseResponse::send(200, 'success', 'Produk berhasil dihapus');
    }
}