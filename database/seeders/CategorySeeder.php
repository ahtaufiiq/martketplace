<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_kategori' => 'L QUEENLY',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'nama_kategori' => 'L MTH AKSESORIS (IM)',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'nama_kategori' => 'L MTH TABUNG (LK)',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'nama_kategori' => 'SP MTH SPAREPART (LK)',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'nama_kategori' => 'CI MTH TINTA LAIN (IM)',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'nama_kategori' => 'L MTH AKSESORIS (LK)',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'nama_kategori' => 'S MTH STEMPEL (IM)',
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];
        Category::insert($data);
    }
}
