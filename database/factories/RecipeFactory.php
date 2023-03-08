<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categoryIDs = \App\Models\Category::pluck('id');
        $authorIDs = \App\Models\Author::pluck('id');
        $ingredients = ingredients();
        return [
            'title' => $this->faker->text(20),
            'description' => $this->faker->paragraph(5, true),
            'instructions' => $this->faker->paragraph(5, true),
            'prep_time' => $this->faker->numberBetween(1, 200),
            'rating' => $this->faker->numberBetween(1, 5),
            'ingredients' => json_encode($this->faker->randomElements($ingredients, $this->faker->numberBetween(1, count($ingredients)))),
            'category_id' => $this->faker->randomElement($categoryIDs),
            'author_id' => $this->faker->randomElement($authorIDs),
        ];
    }
}
