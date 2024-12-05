<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Service::factory()->count(15)->create();
        DB::table('services')->insert([
            [
                'Name' => 'Perawatan Kopi',
                'Description' => 'Layanan perawatan tanaman kopi yang meliputi penyiraman, pemupukan, dan pemangkasan.',
                'Price' => 500000,
                'Category_ID' => 9,
                'Image_path' => 'assets/Perawatan Kopi.png',
            ],
            [
                'Name' => 'Roastery',
                'Description' => 'Layanan roastery yang meliputi proses roasting biji kopi hingga siap disajikan.',
                'Price' => 1000000,
                'Category_ID' => 9,
                'Image_path' => 'assets/Roastery.png',
            ],
            [
                'Name' => 'Stek Kopi',
                'Description' => 'Layanan stek kopi yang meliputi proses perbanyakan tanaman kopi',
                'Price' => 200000,
                'Category_ID' => 9,
                'Image_path' => 'assets/Stek Kopi.png',
            ]
        ]);
    }
}
