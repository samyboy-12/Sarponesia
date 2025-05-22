<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Helper\BaseResponse;

class UserController
{
    public function index()
    {
        return BaseResponse::send(200, 'success', 'Data pengguna berhasil diambil', User::all());
    }

    public function show($id)
    {
        $user = User::find($id);
        if (!$user) {
            return BaseResponse::send(404, 'error', 'Pengguna tidak ditemukan', null, 'Not Found');
        }
        return BaseResponse::send(200, 'success', 'Pengguna ditemukan', $user);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|unique:users,Email',
            'Password' => 'required|string|min:6',
            'Role' => 'required|in:admin,user',
        ]);

        $validated['Password'] = Hash::make($validated['Password']);

        $user = User::create($validated);

        return BaseResponse::send(201, 'success', 'Pengguna berhasil dibuat', $user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return BaseResponse::send(404, 'error', 'Pengguna tidak ditemukan', null, 'Not Found');
        }

        $validated = $request->validate([
            'Name' => 'sometimes|required|string|max:255',
            'Email' => 'sometimes|required|email|unique:users,Email,' . $user->id,
            'Password' => 'nullable|string|min:6',
            'Role' => 'sometimes|required|in:admin,user',
        ]);

        if (isset($validated['Password'])) {
            $validated['Password'] = Hash::make($validated['Password']);
        }

        $user->update($validated);

        return BaseResponse::send(200, 'success', 'Pengguna berhasil diperbarui', $user);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return BaseResponse::send(404, 'error', 'Pengguna tidak ditemukan', null, 'Not Found');
        }

        $user->delete();

        return BaseResponse::send(200, 'success', 'Pengguna berhasil dihapus');
    }
}
