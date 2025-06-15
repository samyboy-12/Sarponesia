<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Helper\BaseResponse;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController
{
    public function index(Request $request)
    {
        $productId = $request->query('product_id');

        // Build query with relationships
        $query = Review::with(['user', 'product']);

        // Apply filter if product_id is provided
        if ($productId) {
            $query->where('Product_ID', $productId);
        }

        $reviews = $query->get();

        return BaseResponse::send(200, 'success', $productId ? "List review untuk produk $productId" : 'List semua review', $reviews);
    }

    // Other methods (show, store, update, destroy) remain unchanged
    public function show($id)
    {
        $review = Review::with(['user', 'product'])->find($id);
        if (!$review) {
            return BaseResponse::send(404, 'error', 'Review tidak ditemukan');
        }
        return BaseResponse::send(200, 'success', 'Detail review', $review);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,User_ID',
            'product_id' => 'required|exists:products,Product_ID',
            'comment' => 'required|string',
            'rating' => 'required|in:1,2,3,4,5',
        ]);

        $review = Review::create($validated);
        return BaseResponse::send(201, 'success', 'Review berhasil dibuat', $review);
    }

    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        if (!$review) {
            return BaseResponse::send(404, 'error', 'Review tidak ditemukan');
        }

        $validated = $request->validate([
            'user_id' => 'sometimes|required|exists:users,User_ID',
            'product_id' => 'sometimes|required|exists:products,Product_ID',
            'comment' => 'sometimes|required|string',
            'rating' => 'sometimes|required|in:1,2,3,4,5',
        ]);

        $review->update($validated);
        return BaseResponse::send(200, 'success', 'Review berhasil diperbarui', $review);
    }

    public function destroy($id)
    {
        $review = Review::find($id);
        if (!$review) {
            return BaseResponse::send(404, 'error', 'Review tidak ditemukan');
        }

        $review->delete();
        return BaseResponse::send(204, 'success', 'Review berhasil dihapus');
    }
}