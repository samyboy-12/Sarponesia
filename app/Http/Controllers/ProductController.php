<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
    
        // Tampilkan data pada view 'Benih&Pupuk', kirim data $benihProducts dan $pupukProducts
        return view('Benih&Pupuk', compact('benihProducts', 'pupukProducts'));
    }

    // Fungsi untuk menampilkan produk perlengkapan produksi
    public function showPeralatan(Request $request)
    {
        //Fungsi untuk mengambil category yang dipilih
        $selectedCategory = $request->query('category');
    
        //Jika category dipilih, maka ambil produk yang memiliki kategori yang dipilih
        if ($selectedCategory) {
            $products = Product::whereHas('category', function ($query) use ($selectedCategory) {
                $query->where('Name', $selectedCategory);
            })->get();
        } else {
            $products = Product::whereHas('category', function ($query) {
                $query->where('Name', 'Peralatan Cafe');
            })->get();
        }
    
        return view('PerlengkapanProduksi_alat', compact('products', 'selectedCategory'));
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

        // Tampilkan data pada view 'Katalog', kirim data $robusta dan $roastedBean
        return view('Katalog', compact('robusta', 'roastedBean'));
    }
}


