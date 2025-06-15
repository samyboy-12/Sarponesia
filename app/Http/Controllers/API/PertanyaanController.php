<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Helper\BaseResponse;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController 
{
    public function index()
    {
        $pertanyaan = Pertanyaan::all();
        return BaseResponse::send(200, 'success', 'List semua pertanyaan', $pertanyaan);
    }

    public function show($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        if (!$pertanyaan) {
            return BaseResponse::send(404, 'error', 'Pertanyaan tidak ditemukan');
        }
        return BaseResponse::send(200, 'success', 'Detail pertanyaan', $pertanyaan);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        $pertanyaan = Pertanyaan::create($validated);
        return BaseResponse::send(201, 'success', 'Pertanyaan berhasil dibuat', $pertanyaan);
    }

    public function update(Request $request, $id)
    {
        $pertanyaan = Pertanyaan::find($id);
        if (!$pertanyaan) {
            return BaseResponse::send(404, 'error', 'Pertanyaan tidak ditemukan');
        }

        $validated = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|max:255',
            'pesan' => 'sometimes|required|string',
        ]);

        $pertanyaan->update($validated);
        return BaseResponse::send(200, 'success', 'Pertanyaan berhasil diperbarui', $pertanyaan);
    }

    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        if (!$pertanyaan) {
            return BaseResponse::send(404, 'error', 'Pertanyaan tidak ditemukan');
        }

        $pertanyaan->delete();
        return BaseResponse::send(204, 'success', 'Pertanyaan berhasil dihapus');
    }
}
