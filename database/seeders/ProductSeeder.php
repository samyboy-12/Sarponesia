<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(10)->create();
        DB::table('products')->insert([
            [
                'Name' => 'Benih 1',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 3,
                'Image_path' => 'assets/Benih 1.png',
            ],
            [
                'Name' => 'Benih 2',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 3,
                'Image_path' => 'assets/Benih 2.png',
            ],
            [
                'Name' => 'Benih 3',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 3,
                'Image_path' => 'assets/Benih 3.png',
            ],
            [
                'Name' => 'Benih 4',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 3,
                'Image_path' => 'assets/Benih 4.png',
            ],
            [
                'Name' => 'Benih 5',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 3,
                'Image_path' => 'assets/Benih 5.png',
            ],
            [
                'Name' => 'Pupuk 1',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 4,
                'Image_path' => 'assets/Pupuk 1.png',
            ],
            [
                'Name' => 'Pupuk 2',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 4,
                'Image_path' => 'assets/Pupuk 2.png',
            ],
            [
                'Name' => 'Pupuk 3',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 4,
                'Image_path' => 'assets/Pupuk 3.png',
            ],
            [
                'Name' => 'Pupuk 4',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 4,
                'Image_path' => 'assets/Pupuk 4.png',
            ],
        ]);
    }
}
