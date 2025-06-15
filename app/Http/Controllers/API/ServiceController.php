<?php

namespace App\Http\Controllers\API;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\BaseResponse;

class ServiceController
{
    public function index()
    {
        return BaseResponse::send(200, 'success', 'Data layanan berhasil diambil', Service::all());
    }

    public function show($id)
    {
        $service = Service::find($id);
        if (!$service) {
            return BaseResponse::send(404, 'error', 'Layanan tidak ditemukan', null, 'Not Found');
        }
        
        return BaseResponse::send(200, 'success', 'Layanan ditemukan', $service);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Name' => 'required|string|max:255',
            'Description' => 'required|string',
            'Category_ID' => 'required|exists:categories,Category_ID',
            'Image_path' => 'nullable|string|max:255',
        ]);

        $service = Service::create($validated);

        return BaseResponse::send(201, 'success', 'Layanan berhasil dibuat', $service);
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        if (!$service) {
            return BaseResponse::send(404, 'error', 'Layanan tidak ditemukan', null, 'Not Found');
        }

        $validated = $request->validate([
            'Name' => 'sometimes|required|string|max:255',
            'Description' => 'sometimes|required|string',
            'Category_ID' => 'sometimes|required|exists:categories,Category_ID',
            'Image_path' => 'nullable|string|max:255',
        ]);

        $service->update($validated);

        return BaseResponse::send(200, 'success', 'Layanan berhasil diperbarui', $service);
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        if (!$service) {
            return BaseResponse::send(404, 'error', 'Layanan tidak ditemukan', null, 'Not Found');
        }

        $service->delete();

        return BaseResponse::send(200, 'success', 'Layanan berhasil dihapus');
    }
}
