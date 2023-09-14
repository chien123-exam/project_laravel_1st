<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Section::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word, // Tên ngẫu nhiên cho section
            'course_id' => function () {
                // Lấy một course_id ngẫu nhiên từ bảng 'courses'
                return \App\Models\Course::inRandomOrder()->first()->id;
            },
        ];
    }
}
