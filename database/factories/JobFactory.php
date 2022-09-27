<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(),
            'location' => fake()->city(),
            'salary' => fake()->numberBetween(1000, 5000),
            'company' => fake()->company(),
            'email' => fake()->email(),
            'tags' => fake()->words(3, true)
        ];
    }
}
