<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderItemResource;
use App\Models\OrderItem;
use App\Http\Controllers\Helper\BaseResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderItemController 
{
    public function index($orderId)
    {
        $orderItems = OrderItem::where('order_id', $orderId)
            ->whereHas('order', function ($query) {
                $query->where('user_id', Auth::id());
            })
            ->with('product')
            ->get();

        return BaseResponse::send(200, 'success', 'Order items retrieved', OrderItemResource::collection($orderItems));
    }

    public function show($orderId, $id)
    {
        $orderItem = OrderItem::where('id', $id)
            ->where('order_id', $orderId)
            ->whereHas('order', function ($query) {
                $query->where('user_id', Auth::id());
            })
            ->with('product')
            ->firstOrFail();

        return BaseResponse::send(200, 'success', 'Order item retrieved', new OrderItemResource($orderItem));
    }
}
?>