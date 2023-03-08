<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipeCategories = [
            'baking',
            'dinners',
            'desserts',
            'side dishes',
            'breakfast',
            'drinks',
            'soups',
            'salads',
            'snacks',
            'sauces',
            'dips',
            'sides',
            'main dishes',
            'appetizer'
        ];

        foreach ($recipeCategories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
