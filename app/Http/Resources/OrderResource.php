<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'address_id' => $this->address_id,
            'payment_method_id' => $this->payment_method_id,
            'order_number' => $this->order_number,
            'total_amount' => $this->total_amount,
            'status' => $this->status,
            'address' => new AddressResource($this->whenLoaded('address')),
            'payment_method' => new PaymentMethodResource($this->whenLoaded('paymentMethod')),
            'order_items' => OrderItemResource::collection($this->whenLoaded('orderItems')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
?>