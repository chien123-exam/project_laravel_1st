<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->unique()->slug,
            'parent' => 0,
            'created_by' => 1,
            'content' => $this->faker->paragraph,
            // 'meta_title' => $this->faker->sentence,
            'meta_desc' => $this->faker->sentence,
            'meta_keyword' => $this->faker->word,
        ];
    }
}
