<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participation>
 */
class ParticipationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'convention_id' => rand(1, 10),
            'user_id' => rand(1, 10),
            'type' => fake()->randomElement(['sessions', 'speaker', 'venues', 'attendees', 'sponsors']),
            'remarks'=> fake()->sentence
        ];
    }
}
