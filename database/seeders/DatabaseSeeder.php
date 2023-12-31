<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(50)->create();
        // \App\Models\Course::factory(50)->create();
        // \App\Models\Category::factory(50)->create();
        // \App\Models\Attachment::factory(50)->create();
        // \App\Models\Lesson::factory(50)->create();
    }
}
