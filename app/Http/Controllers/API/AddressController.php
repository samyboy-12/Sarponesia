<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use App\Http\Controllers\Helper\BaseResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddressController 
{
    public function index()
    {
        $user = Auth::user();
        $addresses = Address::where('user_id', $user->User_ID)->get();

        return BaseResponse::send(200, 'success', 'Addresses retrieved', AddressResource::collection($addresses));
    }

    public function store(Request $request)
    {
        $request->validate([
            'recipient_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address_line' => 'required|string',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10',
            'is_default' => 'boolean',
        ]);

        $user = Auth::user();
        DB::beginTransaction();
        try {
            if ($request->is_default) {
                Address::where('user_id', $user->User_ID)->update(['is_default' => false]);
            }

            $address = Address::create([
                'user_id' => $user->User_ID,
                'recipient_name' => $request->recipient_name,
                'phone' => $request->phone,
                'address_line' => $request->address_line,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'is_default' => $request->is_default ?? false,
            ]);

            DB::commit();
            return BaseResponse::send(201, 'success', 'Address created', new AddressResource($address));
        } catch (\Exception $e) {
            DB::rollback();
            return BaseResponse::send(500, 'error', 'Failed to create address', null, $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'recipient_name' => 'string|max:255',
            'phone' => 'string|max:20',
            'address_line' => 'string',
            'city' => 'string|max:100',
            'postal_code' => 'string|max:10',
            'is_default' => 'boolean',
        ]);

        $address = Address::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        DB::beginTransaction();
        try {
            if ($request->is_default) {
                Address::where('user_id', Auth::id())->update(['is_default' => false]);
            }

            $address->update($request->only([
                'recipient_name',
                'phone',
                'address_line',
                'city',
                'postal_code',
                'is_default',
            ]));

            DB::commit();
            return BaseResponse::send(200, 'success', 'Address updated', new AddressResource($address));
        } catch (\Exception $e) {
            DB::rollback();
            return BaseResponse::send(500, 'error', 'Failed to update address', null, $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $address = Address::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $address->delete();

        return BaseResponse::send(200, 'success', 'Address deleted');
    }
}
?>