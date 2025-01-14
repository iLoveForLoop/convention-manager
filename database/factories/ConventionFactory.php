<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convention>
 */
class ConventionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'start' =>  fake()->time(),
            'end' => fake()->time(),
            'venue' => fake()->address,
            'fee' => fake()->randomFloat(2, 10, 500),
            'remarks' => fake()->sentence
        ];
    }
}