<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create some items
         Items::create([
            'title' => 'Item 1',
            'price' => 10.99,
            'member_price' => 9.99,
        ]);

        Items::create([
            'title' => 'Item 2',
            'price' => 15.99,
            'member_price' => 12.99,
        ]);

        Items::create([
            'title' => 'Item 3',
            'price' => 20.99,
            'member_price' => 19.99,
        ]);
    }
}
