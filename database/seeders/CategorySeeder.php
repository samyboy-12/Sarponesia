<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'Name' => 'Robusta', 
                'category_type' => 'kopi',
                'Description' => null
            ],
            [
                'Name' => 'Roastedbean',
                'category_type' => 'kopi',
                'Description' => null
            ],
            [
                'Name' => 'Benih Kopi',
                'category_type' => 'benih & pupuk',
                'Description' => null
            ],
            [
                'Name' => 'Pupuk Kopi',
                'category_type' => 'benih & pupuk',
                'Description' => null
            ],
            [
                'Name' => 'Peralatan Pasca Panen',
                'category_type' => 'peralatan',
                'Description' => null
            ],
            [
                'Name' => 'Peralatan Produksi',
                'category_type' => 'peralatan',
                'Description' => null
            ],
            [
                'Name' => 'Peralatan Pengolahan',
                'category_type' => 'peralatan',
                'Description' => null
            ],
            [
                'Name' => 'Peralatan Cafe',
                'category_type' => 'peralatan',
                'Description' => null
            ],
            [
                'Name' => 'Perawatan Kebun',
                'category_type' => 'perawatan kebun & pelatihan',
                'Description' => null
            ],
            [
                'Name' => 'Barista dan Roastery',
                'category_type' => 'perawatan kebun & pelatihan',
                'Description' => null
            ],
            [
                'Name' => 'Pelatihan Perawatan Kebun',
                'category_type' => 'perawatan kebun & pelatihan',
                'Description' => null
            ],
            [
                'Name' => 'Pengolahan Pasca Panen',
                'category_type' => 'perawatan kebun & pelatihan',
                'Description' => null
            ],
            [
                'Name' => 'Logo dan Branding',
                'category_type' => 'perawatan kebun & pelatihan',
                'Description' => null
            ],
            [
                'Name' => 'News',
                'category_type' => 'article',
                'Description' => null
            ],
            [
                'Name' => 'Coffee Technology',
                'category_type' => 'article',
                'Description' => null
            ],
            [
                'Name' => 'Tips & Trick',
                'Description' => 'Kategori untuk artikel tips dan trik seputar kopi',
                'category_type' => 'article'
            ],
        ]);
    }
}
