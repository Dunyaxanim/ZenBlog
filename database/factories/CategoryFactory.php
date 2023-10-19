<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=> $this->faker->name(),
            "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
            "updated_at" => Carbon::now()->subHours(-4)->format("Y-m-d H:i:s"),
        ];
    }
}
