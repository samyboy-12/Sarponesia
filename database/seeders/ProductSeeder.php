<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Product::factory()->count(10)->create();
        DB::table('products')->insert([
            [
                'Name' => 'Benih 1',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 3,
                'Image_path' => 'assets/Benih 1.png',
                'Link_tokped' => null,
            ],
            [
                'Name' => 'Benih 2',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 3,
                'Image_path' => 'assets/Benih 2.png',
                'Link_tokped' => null,
            ],
            [
                'Name' => 'Benih 3',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 3,
                'Image_path' => 'assets/Benih 3.png',
                'Link_tokped' => null,
            ],
            [
                'Name' => 'Benih 4',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 3,
                'Image_path' => 'assets/Benih 4.png',
                'Link_tokped' => null,
            ],
            [
                'Name' => 'Benih 5',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 3,
                'Image_path' => 'assets/Benih 5.png',
                'Link_tokped' => null,
            ],
            [
                'Name' => 'Pupuk 1',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 4,
                'Image_path' => 'assets/Pupuk 1.png',
                'Link_tokped' => null,
            ],
            [
                'Name' => 'Pupuk 2',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 4,
                'Image_path' => 'assets/Pupuk 2.png',
                'Link_tokped' => null,
            ],
            [
                'Name' => 'Pupuk 3',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 4,
                'Image_path' => 'assets/Pupuk 3.png',
                'Link_tokped' => null,
            ],
            [
                'Name' => 'Pupuk 4',
                'Description' => Lorem::text(100),
                'Price' => 10000,
                'Stock' => 100,
                'Category_ID' => 4,
                'Image_path' => 'assets/Pupuk 4.png',
                'Link_tokped' => null,
            ],
            [
                'Name' => 'Kursi Cafe Tanpa Sandaran',
                'Description' => 'kursi bar cafe minimalis berbahan kayu mahoni dengan finishing plitur air berwana coklat.',
                'Price' => 95000,
                'Stock' => 20,
                'Category_ID' => 8,
                'Image_path' => 'assets/Kursi Cafe Tanpa Sandaran.png',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/kursi-cafe-bar-tanpa-sandaran?extParam=src%3Dshop%26whid%3D5918837',
            ],
            [
                'Name' => 'Kursi Cafe Dengan Sandaran',
                'Description' => 'kursi cafe model kekinian berbahan kayu mahoni dengan finishing plitur air bahan tebal dan kuat.',
                'Price' => 220000,
                'Stock' => 10,
                'Category_ID' => 8,
                'Image_path' => 'assets/Kursi Cafe Dengan Sandaran.png',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/kursi-cafe-kayu-dengan-sandaran-kursi-1-saja-8dd81?extParam=src%3Dshop%26whid%3D5918837'
            ],
            [
                'Name' => 'Meja Cafe',
                'Description' => 'meja cafe berbahan tebal dan kuat, berbahan kayu mahoni, alas multiplek, dan juga finishing plitur air.',
                'Price' => 300000,
                'Stock' => 10,
                'Category_ID' => 8,
                'Image_path' => 'assets/Meja Cafe.png',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/meja-cafe-panjang-pendek-pendek-4144b?extParam=src%3Dshop%26whid%3D5918837'
            ],
            [
                'Name' => 'Pengukur Kadar Air',
                'Description' => 'Spesifikasi: Suhu kerja: 0-40 derajat, Rentang pengukuran: 3-35%, Tampilan: LCD, Penyesuaian Suhu: Secara Otomatis, Pengukuran suhu: 0-60 derajat, Mengukur Waktu : kurang lebih 10 detik, Fungsi: Kandungan Kelembaban, Daya Kerja: baterai 9V, Sertikiasi : tanda CE',
                'Price' => 2000000,
                'Stock' => 5,
                'Category_ID' => 5,
                'Image_path' => 'assets/Pengukur Kadar Air.png',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/pengukur-kadar-air-biji-kopi-grain-moisture-meter-coffe-beans?extParam=src%3Dshop%26whid%3D5918837'
            ],
            [
                'Name' => 'RoastedBean 800gr',
                'Description' => 'Nama : Kopi robusta biji/ roastedbean, Berat : 800Gr, Roast level : medium city roasted, Origin region : kebun kopi tejo, kec kebonagung, pacitan jawa timur, indonesia, Mdpl : 600-750mdpl, Proses : natural dan honey, Level : medium roasted, Grindsize : very fine',
                'Price' => 110000,
                'Stock' => 10,
                'Category_ID' => 2,
                'Image_path' => 'assets/RoastedBean 800gr.jpg',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/roastedbean-robusta-800gr?extParam=whid%3D5918837%26src%3Dshop'
            ],
            [
                'Name' => 'Kopi Robusta Ekonomis',
                'Description' => 'Nama : Kopi robusta bubuk, Berat : 1kg, Roast level : medium city roasted, Origin region : kebun kopi tejo, kec kebonagung, pacitan jawa timur, indonesia, Mdpl : 600-750mdpl, Proses : natural dan honey, Level : medium roasted, Grindsize : very fine',
                'Price' => 625000,
                'Stock' => 10,
                'Category_ID' => 1,
                'Image_path' => 'assets/Kopi Robusta Ekonomis.jpg',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/kopi-robusta-paket-ekonomis?extParam=src%3Dshop%26whid%3D5918837'
            ],
            [
                'Name' => 'GreenBean',
                'Description' => '1 x Kopi Robusta Greenbean 1kg, Note rasa : Caramel, Chocolaty, Proces : natural, Penanaman : 600-750mdpl',
                'Price' => 75000,
                'Stock' => 10,
                'Category_ID' => 2,
                'Image_path' => 'assets/GreenBean.jpg',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/robusta-grade-b?extParam=src%3Dshop%26whid%3D5918837'
            ],
            [
                'Name' => 'Robusta Petik Merah 100gr',
                'Description' => ' Nama : Kopi robusta bubuk, Berat : 100Gr, Roast level : medium city roasted, Origin region : kebun kopi tejo, kec kebonagung, pacitan jawa timur, indonesia, Mdpl : 600-750mdpl, Proses : natural dan honey, Level : medium roasted, Grindsize : very fine',
                'Price' => 18000,
                'Stock' => 10,
                'Category_ID' => 1,
                'Image_path' => 'assets/Robusta Petik Merah 100gr.jpg',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/kopi-robusta-pacitan-100gr?extParam=src%3Dshop%26whid%3D5918837'
            ],
            [
                'Name' => 'Robusta Premium Grade 1',
                'Description' => 'Nama : Kopi robusta biji/ roastedbean, Berat : 1kg, Roast level : medium city roasted, Origin region : kebun kopi tejo, kec kebonagung, pacitan jawa timur, indonesia, Mdpl : 600-750mdpl, Proses : natural dan honey, Level : medium roasted, Grindsize : very fine',
                'Price' => 140000,
                'Stock' => 10,
                'Category_ID' => 2,
                'Image_path' => 'assets/Robusta Premium Grade 1.jpg',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/java-robusta-pacitan-biji-roastedbean-grade-super-sarponesia-coffee-pacitan?extParam=src%3Dshop%26whid%3D5918837'
            ],
            [
                'Name' => 'Robusta Petik Merah 500gr',
                'Description' => 'Nama : Kopi bubuk robusta, Berat : 500gr, Roast level : medium city roasted, Origin region : kebun kopi tejo, kec kebonagung, pacitan jawa timur, indonesia, Mdpl : 600-750mdpl, Proses : natural dan honey, Level : medium roasted, Grindsize : very fine',
                'Price' => 78000,
                'Stock' => 10,
                'Category_ID' => 1,
                'Image_path' => 'assets/Robusta Petik Merah 500gr.jpg',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/fine-robusta-pacitan-bubuk-500gr?extParam=src%3Dshop%26whid%3D5918837'
            ],
            [
                'Name' => 'Robusta Premium Grade 1',
                'Description' => 'Nama : Kopi robusta biji/ roastedbean, Berat : 1kg, Roast level : medium city roasted, Origin region : kebun kopi tejo, kec kebonagung, pacitan jawa timur, indonesia, Mdpl : 600-750mdpl, Proses : natural dan honey, Level : medium roasted, Grindsize : very fine',
                'Price' => 140000,
                'Stock' => 10,
                'Category_ID' => 1,
                'Image_path' => 'assets/Robusta Premium Grade 1 1kg.jpg',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/java-robusta-pacitan-bubuk-1kg?extParam=src%3Dshop%26whid%3D5918837'
            ],
            [
                'Name' => 'Robusta Grade C Robusta Asalan',
                'Description' => 'biji kopi robusta asalan grade C per 50kg',
                'Price' => 2250000,
                'Stock' => 10,
                'Category_ID' => 2,
                'Image_path' => 'assets/Robusta Grade C Robusta Asalan.jpg',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/biji-kopi-robusta-asalan-grade-c?extParam=src%3Dshop%26whid%3D5918837'
            ],
            [
                'Name' => 'Robusta Grade B',
                'Description' => 'biji robusta pacitan honey proses atau kupas basah dengan penjemuran dibawah sinar matahari langsung selama 1 minggu.tingkat sortasi 50% per 1kg',
                'Price' => 85000,
                'Stock' => 10,
                'Category_ID' => 2,
                'Image_path' => 'assets/Robusta Grade B.jpg',
                'Link_tokped' => 'https://www.tokopedia.com/sarponesia/robusta-honey-process-grade-b?extParam=src%3Dshop%26whid%3D5918837'
            ]
        ]);
    }
}
