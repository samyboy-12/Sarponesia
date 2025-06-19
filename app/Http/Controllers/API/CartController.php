<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Product;
use App\Http\Controllers\Helper\BaseResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController
{
    public function index()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->User_ID)->with('product')->get();

        return BaseResponse::send(200, 'success', 'Cart retrieved', CartResource::collection($carts));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,Product_ID',
            'quantity' => 'required|integer|min:1',
        ]);

        $user = Auth::user();
        $cart = Cart::updateOrCreate(
            ['user_id' => $user->User_ID, 'product_id' => $request->product_id],
            ['quantity' => DB::raw('quantity + ' . $request->quantity)]
        );

        return BaseResponse::send(201, 'success', 'Item added to cart', new CartResource($cart));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Cart::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $cart->update(['quantity' => $request->quantity]);

        return BaseResponse::send(200, 'success', 'Cart updated', new CartResource($cart));
    }

    public function destroy($id)
    {
        $cart = Cart::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $cart->delete();

        return BaseResponse::send(200, 'success', 'Item removed from cart');
    }
}
?>