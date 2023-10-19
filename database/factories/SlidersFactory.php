<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sliders>
 */
class SlidersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(10),
            'content' => fake()->text(20),
            'imgUrl' => 'post-landscape-1.jpg',
            'created_at' => now(),
        ];
    }
}
