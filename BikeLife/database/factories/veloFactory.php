<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Velo>
 */
class veloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'path' => $this->faker->sentence,
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 500, $max = 3000),
            'sale' => $this->faker->boolean,
            'salePrice' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 500, $max = 3000),
        ];
    }
}
