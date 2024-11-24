<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Fungsi untuk menampilkan produk dengan kategori 'Benih Kopi' dan 'Pupuk Kopi'
    public function showBenihDanPupuk()
    {
        // Ambil produk yang memiliki kategori 'Benih Kopi'
        $benihProducts = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Benih Kopi');
        })->get();
    
        // Ambil produk yang memiliki kategori 'Pupuk Kopi'
        $pupukProducts = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Pupuk Kopi');
        })->get();

        //test controller
        // dd($benihProducts, $pupukProducts);
    
        // Tampilkan data pada view 'Benih&Pupuk', kirim data $benihProducts dan $pupukProducts
        return view('Benih&Pupuk', compact('benihProducts', 'pupukProducts'));
    }

    // Fungsi untuk menampilkan produk perlengkapan produksi
    public function showPeralatan()
    {
        // Ambil produk yang memiliki kategori 'Peralatan Pasca Panen'
        $peralatanPascaPanen = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Peralatan Pasca Panen');
        })->get();

        // Ambil produk yang memiliki kategori 'Peralatan Produksi'
        $peralatanProduksi = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Peralatan Produksi');
        })->get();

        // Ambil produk yang memiliki kategori 'Peralatan Pengolahan'
        $peralatanPengolahan = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Peralatan Pengolahan');
        })->get();

        // Ambil produk yang memiliki kategori 'Peralatan Cafe'
        $peralatanCafe = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Peralatan Cafe');
        })->get();


        //test controller
        // dd($peralatanPascaPanen, $peralatanProduksi, $peralatanPengolahan, $peralatanCafe);

        // Tampilkan data pada view 'PerlengkapanProduksi_alat', kirim semua data yang diambil
        return view('PerlengkapanProduksi_alat', compact('peralatanPascaPanen', 'peralatanProduksi', 'peralatanPengolahan', 'peralatanCafe'));
    }

    // Fungsi untuk menampilkan katalog produk
    public function showCatalog()
    {
        // Ambil produk yang memiliki kategori 'Robusta'
        $robusta = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Robusta');
        })->get();

        // Ambil produk yang memiliki kategori 'Roastedbean'
        $roastedBean = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Roastedbean');
        })->get();

        //test controller
        // dd($robusta, $roastedBean);

        // Tampilkan data pada view 'Katalog', kirim data $robusta dan $roastedBean
        return view('Katalog', compact('robusta', 'roastedBean'));
    }
}
