<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'qwerty123',
            'user_type' => 'admin',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'andi',
            'email' => 'andi@example.com',
            'password' => 'qwerty123',
            'user_type' => 'user',
        ]);
        $this->call(CategorySeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
