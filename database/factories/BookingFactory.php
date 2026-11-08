<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends Factory<Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    
        $startTime = Carbon::instance(
            fake()->dateTimeBetween('now', '+2 months')
        );
        $endTime = $startTime->copy()->addHours(
            fake()->numberBetween(1, 5)
        );

        return [
            'user_id' => fake()->numberBetween(1, 10),
            'bike_id' => fake()->numberBetween(1, 20),
            'start_time' => $startTime,
            'end_time' => $endTime,
            'status' => fake()->randomElement([
                'pending',
                'active',
                'completed',
                'cancelled',
            ]),
            'total_cost' => fake()->randomFloat(2, 5, 200),
        ];
    }
}
