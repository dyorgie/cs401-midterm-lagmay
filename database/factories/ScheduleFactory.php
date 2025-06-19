<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day_of_week' => fake()->randomElement(['Monday','Tuesday', 'Wednesday','Thursday','Friday', 'Saturday']),
            'time_slot' => fake()->dateTime(),
            'room' => fake()->numerify('###'),
            'term' => fake()->randomElement(['1st','2nd', '3rd']),
        ];
    }
}
