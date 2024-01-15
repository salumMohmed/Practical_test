<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductValue extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        // Create 10 dummy products
        Product::factory()->count(10)->create();
    
    }
}

