<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'Title' => 'Berita Pertanian Terkini',
                'Content' => 'Informasi terbaru mengenai perkembangan pertanian di Indonesia.',
                'Category_ID' => 7, // News
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Title' => 'Inovasi Teknologi Kopi',
                'Content' => 'Penggunaan alat dan teknologi baru dalam pengolahan kopi.',
                'Category_ID' => 8, // Coffee Technology
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Title' => 'Tips Merawat Tanaman Kopi',
                'Content' => 'Cara merawat tanaman kopi agar hasil panen maksimal.',
                'Category_ID' => 9, // Tips and Trick
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
