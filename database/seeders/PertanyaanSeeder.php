<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pertanyaan')->insert([
            [
                'nama' => 'Andi Wijaya',
                'email' => 'andi@example.com',
                'pesan' => 'Bagaimana cara melakukan pemesanan?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sari Dewi',
                'email' => 'sari@example.com',
                'pesan' => 'Apakah produk tersedia untuk pengiriman ke luar kota?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rudi Hartono',
                'email' => 'rudi@example.com',
                'pesan' => 'Apakah bisa bayar pakai COD?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}