<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    // Fungsi untuk menampilkan layanan kategori 'Perawatan Kebun'
    public function showPerawatanKebun()
    {
        // Ambil layanan yang memiliki kategori 'Perawatan Kebun'
        $perawatanKebun = Service::whereHas('category', function ($query) {
            $query->where('Name', 'Perawatan Kebun');
        })->get();

        // Tampilkan data pada view 'JasaKebunKopi_perawatan', kirim data $perawatanKebun
        return view('JasaKebunKopi_perawatan', compact('perawatanKebun'));
    }

    // Fungsi untuk menampilkan layanan kategori pelatihan
    public function showPelatihan(Request $request)
    {
        // Fungsi untuk mengambil category yang dipilih
        $selectedCategory = $request->query('category', 'Barista dan Roastery'); // Default ke 'Barista dan Roastery' jika tidak ada kategori
        // Fungsi untuk mengambil layanan yang memiliki kategori yang dipilih
        $services = Service::whereHas('category', function ($query) use ($selectedCategory) {
            $query->where('Name', $selectedCategory);
        })->get();
    
        return view('Pelatihan', compact('services', 'selectedCategory'));
    }
}

