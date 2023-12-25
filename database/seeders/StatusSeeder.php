<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_status' => 'tidak bisa dijual',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'nama_status' => 'bisa dijual',
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];
        Status::insert($data);
    }
}
