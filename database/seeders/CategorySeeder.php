<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; 
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Electronics',
            'Clothing',
            'Books',
            'Home Appliances',
            'Sports',
            'Toys',
            'Beauty',
            'Furniture'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
