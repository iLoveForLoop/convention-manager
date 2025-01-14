<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personl_Info>
 */
class PersonlInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 10),
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'address' => fake()->address,
            'phone' => fake()->address,
        ];
    }
}
