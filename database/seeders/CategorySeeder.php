<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'Name' => 'Kopi',
                'Description' => 'Berbagai jenis kopi dari berbagai daerah.',
                'Category_type' => 'kopi',
            ],
            [
                'Name' => 'Benih',
                'Description' => 'Benih tanaman untuk pertanian.',
                'Category_type' => 'benih',
            ],
            [
                'Name' => 'Pupuk',
                'Description' => 'Pupuk untuk memperkaya tanah dan tanaman.',
                'Category_type' => 'pupuk',
            ],
            [
                'Name' => 'Peralatan',
                'Description' => 'Peralatan untuk berkebun dan pertanian.',
                'Category_type' => 'peralatan',
            ],
            [
                'Name' => 'Layanan',
                'Description' => 'Layanan yang terkait dengan produk pertanian.',
                'Category_type' => 'layanan',
            ],
            [
                'Name' => 'Jasa',
                'Description' => 'Jasa terkait dengan bidang pertanian dan agrikultur.',
                'Category_type' => 'jasa',
            ],
            [
                'Name' => 'News',
                'Description' => 'Berita terbaru tentang dunia pertanian dan kopi.',
                'Category_type' => 'News',
            ],
            [
                'Name' => 'Coffee Technology',
                'Description' => 'Artikel mengenai teknologi terbaru dalam dunia kopi.',
                'Category_type' => 'Coffee Technology',
            ],
            [
                'Name' => 'Tips and Trick',
                'Description' => 'Tips dan trik seputar pertanian dan kopi.',
                'Category_type' => 'Tips and Trick',
            ],
        ]);
    }
}
