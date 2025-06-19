<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
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
            'subject' => fake()->randomElement(['Math','Science', 'English', 'Programming', 'Physics']),
            'course_code' => fake()->randomNumber(),
            'credits' => fake()->numberBetween(5, 15),
            'description' => fake()->sentence(),
        ];
    }
}
