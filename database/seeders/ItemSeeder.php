<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfItems = 50;

        for ($i = 0; $i < $numberOfItems; $i++) {
            Items::create([
                'name' => 'Item ' . Str::random(10),
                'price' => mt_rand(100, 1000) / 10,  // Generates a random price between 10.0 and 100.0
                'member_price' => mt_rand(50, 900) / 10,  // Generates a random member price between 5.0 and 90.0
                'category' => 'Category ' . mt_rand(1, 5),  // Generates a category like 'Category 1', 'Category 2', etc.
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
