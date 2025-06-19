<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name'=> fake()->lastName(),
            'program' => fake()->randomElement(['Computer Science','MMA', 'Entrep', 'Fashion']),
            'enrollment_year' => fake()->numberBetween(2015, 2024),
            'birthday' => fake()->date(),
            'user_id' => User::factory(),
        ];
    }
}
