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

        // test controller
        // dd($perawatanKebun);

        // Tampilkan data pada view 'JasaKebunKopi_perawatan', kirim data $perawatanKebun
        return view('JasaKebunKopi_perawatan', compact('perawatanKebun'));
    }

    // Fungsi untuk menampilkan layanan kategori pelatihan
    public function showPelatihan()
    {
        // Ambil layanan yang memiliki kategori 'Logo dan Branding'
        $logoAndBranding = Service::whereHas('category', function ($query) {
            $query->where('Name', 'Logo dan Branding');
        })->get();

        // Ambil layanan yang memiliki kategori 'Barista dan Roastery'
        $baristaAndRoastery = Service::whereHas('category', function ($query) {
            $query->where('Name', 'Barista dan Roastery');
        })->get();

        // Ambil layanan yang memiliki kategori 'Pelatihan Perawatan Kebun'
        $latihanPerawatanKebun = Service::whereHas('category', function ($query) {
            $query->where('Name', 'Pelatihan Perawatan Kebun');
        })->get();

        // Ambil layanan yang memiliki kategori 'Pengolahan Pasca Panen'
        $pengolahanPascaPanen = Service::whereHas('category', function ($query) {
            $query->where('Name', 'Pengolahan Pasca Panen');
        })->get();

        // test controller
        // dd($logoAndBranding, $baristaAndRoastery, $latihanPerawatanKebun, $pengolahanPascaPanen);

        // Tampilkan data pada view 'Pelatihan', kirim semua data layanan ke tampilan
        return view('Pelatihan', compact('logoAndBranding', 'baristaAndRoastery', 'latihanPerawatanKebun', 'pengolahanPascaPanen'));
    }
}

