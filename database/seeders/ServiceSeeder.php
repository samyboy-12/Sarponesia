<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'Name' => 'Perawatan Kopi',
                'Description' => 'Layanan perawatan tanaman kopi yang meliputi penyiraman, pemupukan, dan pemangkasan.',
                'Category_ID' => 5,
                'Image_path' => 'assets/Perawatan Kopi.png',
            ],
            [
                'Name' => 'Roastery',
                'Description' => 'Layanan roastery yang meliputi proses roasting biji kopi hingga siap disajikan.',
                'Category_ID' => 5,
                'Image_path' => 'assets/Roastery.png',
            ],
            [
                'Name' => 'Stek Kopi',
                'Description' => 'Layanan stek kopi yang meliputi proses perbanyakan tanaman kopi.',
                'Category_ID' => 5,
                'Image_path' => 'assets/Stek Kopi.png',
            ],
            [
                'Name' => 'Teknik Penyeduhan yang Presisi',
                'Description' => 'Kuasai metode penyeduhan terbaik seperti pour-over, espresso, french press, dan lainnya.',
                'Category_ID' => 6,
                'Image_path' => 'assets/b96bf57bc8a48515c61db977c6cdb19f.png',
            ],
            [
                'Name' => 'Latihan Mesin Espresso Professional',
                'Description' => 'Pelajari penggunaan mesin espresso dengan benar, teknik steaming untuk tekstur yang halus, serta seni latte art yang memukau.',
                'Category_ID' => 6,
                'Image_path' => 'assets/1d9bf308618687e867a00670cd518ea0.png',
            ],
            [
                'Name' => 'Pelatihan Barista',
                'Description' => 'Pelajari teknik penyeduhan kopi yang presisi, latte art, dan teknik penyajian kopi yang baik.',
                'Category_ID' => 6,
                'Image_path' => 'assets/Barista.png',
            ],
            [
                'Name' => 'Proses Pemanggangan (Roasting) yang Mendetail',
                'Description' => 'Pelajari pemanggangan biji kopi dari light hingga dark roast untuk membuat karakter unik setiap biji.',
                'Category_ID' => 6,
                'Image_path' => 'assets/b424c22c97bdb022a348f09bcbc25217.png',
            ],
        ];

        DB::table('services')->insert($services);
    }
}
