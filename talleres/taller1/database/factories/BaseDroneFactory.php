<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BaseDrone>
 */
class BaseDroneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'brand' => $this->faker->company,
            'baseprice' => $this->faker->randomFloat(2, 100, 1000),
            'description' => $this->faker->paragraph,
        ];
    }
}
