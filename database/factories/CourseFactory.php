<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->unique()->sentence),
            'link' => $this->faker->url,
            'avatar' => $this->faker->imageUrl(200,200),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'old_price' => $this->faker->randomFloat(2, 10, 500),
            'created_by' => $this->faker->randomNumber(),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'lessons' => function () {
                // Lấy một lesson_id ngẫu nhiên từ bảng 'lessons'
                return \App\Models\Lesson::inRandomOrder()->first()->id;
            },
            'sections' => function () {
                // Lấy một section_id ngẫu nhiên từ bảng 'sections'
                return \App\Models\Section::inRandomOrder()->first()->id;
            },
            'view_count' => $this->faker->randomNumber(),
            'benefits' => json_encode([$this->faker->sentence, $this->faker->sentence]),
            'fqa' => json_encode([$this->faker->sentence, $this->faker->sentence]),
            'is_feature' => $this->faker->randomElement([0, 1]),
            'is_online' => random_int(1, 2),
            'description' => $this->faker->paragraph,
            'content' => $this->faker->paragraphs(3, true),
            'meta_title' => $this->faker->sentence,
            'meta_desc' => $this->faker->paragraph,
            'meta_keyword' => $this->faker->words(5, true),
        ];
    }
}
