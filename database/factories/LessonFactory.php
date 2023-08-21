<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LessonFactory extends Factory
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
            'course_id' => $this->faker->randomNumber(),
            'section_id' => null,
            'video_type' => $this->faker->randomElement([1, 2]),
            'video_url' => $this->faker->url,
            'time' => $this->faker->time,
            'preview' => $this->faker->boolean,
            'content' => $this->faker->paragraphs(3, true),
        ];
    }
}
