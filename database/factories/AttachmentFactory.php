<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AttachmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_path' => $this->faker->url,
            'attachable_type' => null,
            'file_name' => $this->faker->word,
            'attachable_id' => $this->faker->randomNumber(),
            'extension' => $this->faker->fileExtension,
            'mime_type' => $this->faker->mimeType,
            'size' => $this->faker->numberBetween(1, 10000),
        ];
    }
}
