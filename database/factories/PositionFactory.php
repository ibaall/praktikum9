<?php

namespace Database\Factories;

use App\Models\Position; // Pastikan ini diimpor
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->stateAbbr(),
            'name' => $this->faker->jobTitle(),
            'description' => $this->faker->sentence(),
        ];
    }
}
