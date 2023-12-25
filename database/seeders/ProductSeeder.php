<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "nama_produk" => 'ALCOHOL GEL POLISH CLEANSER GP-CLN01',
                "kategori_id" => 1,
                "harga" => 12500,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM',
                "kategori_id" => 2,
                "harga" => 1000,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM',
                "kategori_id" => 2,
                "harga" => 1000,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM',
                "kategori_id" => 2,
                "harga" => 12500,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM',
                "kategori_id" => 2,
                "harga" => 12500,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM',
                "kategori_id" => 2,
                "harga" => 1000,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM',
                "kategori_id" => 2,
                "harga" => 13000,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ALUMUNIUM FOIL PET SHEET 250mm IM',
                "kategori_id" => 2,
                "harga" => 1000,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ARM PENDEK MODEL U',
                "kategori_id" => 2,
                "harga" => 13000,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ARM SUPPORT KECIL',
                "kategori_id" => 3,
                "harga" => 13000,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ARM SUPPORT KOTAK PUTIH',
                "kategori_id" => 2,
                "harga" => 13000,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ARM SUPPORT PENDEK POLOS',
                "kategori_id" => 3,
                "harga" => 13000,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ARM SUPPORT S IM',
                "kategori_id" => 2,
                "harga" => 1000,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ARM SUPPORT T (IMPORT)',
                "kategori_id" => 2,
                "harga" => 13000,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'ARM SUPPORT T - MODEL 1 ( LOKAL )',
                "kategori_id" => 3,
                "harga" => 10000,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BLACK LASER TONER FP-T3 (100gr)',
                "kategori_id" => 2,
                "harga" => 13000,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BODY PRINTER CANON IP2770',
                "kategori_id" => 4,
                "harga" => 500,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BODY PRINTER T13X',
                "kategori_id" => 4,
                "harga" => 15000,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)',
                "kategori_id" => 5,
                "harga" => 10000,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)',
                "kategori_id" => 5,
                "harga" => 10000,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)',
                "kategori_id" => 5,
                "harga" => 1500,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM',
                "kategori_id" => 5,
                "harga" => 1500,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM',
                "kategori_id" => 5,
                "harga" => 1500,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)',
                "kategori_id" => 5,
                "harga" => 1000,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)',
                "kategori_id" => 5,
                "harga" => 1500,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)',
                "kategori_id" => 5,
                "harga" => 1500,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)',
                "kategori_id" => 5,
                "harga" => 1000,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)',
                "kategori_id" => 5,
                "harga" => 1500,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL KOTAK 100ML LK',
                "kategori_id" => 6,
                "harga" => 1000,
                "status_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_produk" => 'BOTOL 10ML IM',
                "kategori_id" => 7,
                "harga" => 1000,
                "status_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];

        // Product::insert($data);
        $product = Product::find(24);
        echo ($product);
    }
}
