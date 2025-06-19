<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PaymentMethod;
use App\Http\Controllers\Helper\BaseResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderController
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->User_ID)->with('orderItems.product')->get();

        return BaseResponse::send(200, 'success', 'Orders retrieved', OrderResource::collection($orders));
    }

    public function store(Request $request)
    {
        $request->validate([
            'address_id' => 'required|exists:addresses,id',
            'payment_method_id' => 'required|exists:payment_methods,id',
            'cart_items' => 'required|array',
            'cart_items.*.cart_id' => 'required|exists:carts,id',
        ]);

        $user = Auth::user();
        DB::beginTransaction();
        try {
            $totalAmount = 0;
            $orderItems = [];

            foreach ($request->cart_items as $item) {
                $cart = Cart::where('id', $item['cart_id'])
                    ->where('user_id', $user->User_ID)
                    ->with('product')
                    ->firstOrFail();

                $subtotal = $cart->product->price * $cart->quantity;
                $totalAmount += $subtotal;

                $orderItems[] = [
                    'product_id' => $cart->product_id,
                    'quantity' => $cart->quantity,
                    'price' => $cart->product->price,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            $order = Order::create([
                'user_id' => $user->User_ID,
                'address_id' => $request->address_id,
                'payment_method_id' => $request->payment_method_id,
                'order_number' => 'ORD-' . Str::upper(Str::random(8)),
                'total_amount' => $totalAmount,
                'status' => 'pending',
            ]);

            foreach ($orderItems as $item) {
                $item['order_id'] = $order->id;
                OrderItem::create($item);
            }

            Cart::where('user_id', $user->User_ID)
                ->whereIn('id', array_column($request->cart_items, 'cart_id'))
                ->delete();

            DB::commit();
            return BaseResponse::send(201, 'success', 'Order created', new OrderResource($order->load('orderItems')));
        } catch (\Exception $e) {
            DB::rollback();
            return BaseResponse::send(500, 'error', 'Failed to create order', null, $e->getMessage());
        }
    }

    public function show($id)
    {
        $order = Order::where('id', $id)
            ->where('user_id', Auth::id())
            ->with('orderItems.product', 'address', 'paymentMethod')
            ->firstOrFail();

        return BaseResponse::send(200, 'success', 'Order retrieved', new OrderResource($order));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'in:pending,paid,shipped,delivered,cancelled',
        ]);

        $order = Order::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $order->update($request->only(['status']));

        return BaseResponse::send(200, 'success', 'Order updated', new OrderResource($order));
    }
}
?>