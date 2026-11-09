<?php

namespace Database\Factories;

use App\Models\Bike;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Bike>
 */
class BikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'serial_number' => fake()->unique->bothify('B-#####'),
            'model' => fake()->randomElement([
                'Urbana',
                'Montaña',
                'Electrica',
            ]),
            'price_per_hour' => fake()->randomFloat(2, 5, 30),
            'status' => fake()->randomElement([
                'available',
                'maintenance',
                'retired',
            ]),
        ];
    }
}
