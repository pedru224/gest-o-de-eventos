<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    public function definition(): array
    {
        $start = now()
            ->addDays(fake()->numberBetween(2, 30))
            ->setTime(fake()->numberBetween(8, 19), 0);

        return [
            'category_id' => Category::factory(),
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'location' => fake()->address(),
            'start_at' => $start,
            'end_at' => $start->copy()->addHours(3),
            'capacity' => fake()->numberBetween(10, 100),
            'status' => 'scheduled',
        ];
    }
}
