<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaymentMethodResource;
use App\Models\PaymentMethod;
use App\Http\Controllers\Helper\BaseResponse;
use Illuminate\Http\Request;

class PaymentMethodController 
{
    public function index()
    {
        $paymentMethods = PaymentMethod::where('is_active', true)->get();

        return BaseResponse::send(200, 'success', 'Payment methods retrieved', PaymentMethodResource::collection($paymentMethods));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $paymentMethod = PaymentMethod::create([
            'name' => $request->name,
            'details' => $request->details,
            'is_active' => $request->is_active ?? true,
        ]);

        return BaseResponse::send(201, 'success', 'Payment method created', new PaymentMethodResource($paymentMethod));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
            'details' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $paymentMethod = PaymentMethod::findOrFail($id);
        $paymentMethod->update($request->only(['name', 'details', 'is_active']));

        return BaseResponse::send(200, 'success', 'Payment method updated', new PaymentMethodResource($paymentMethod));
    }

    public function destroy($id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);
        $paymentMethod->delete();

        return BaseResponse::send(200, 'success', 'Payment method deleted');
    }
}
?>