<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=> $this->faker->sentence(3),
            "description"=> $this->faker->sentence(3),
            "imgUrl"=> 'post-landscape-2.jpg',
            "authorName"=> $this->faker->name(),
            "authorimgUrl"=> 'person-1.jpg',
            "category_id"=>rand(1,10),
            "created_at"=>Carbon::now()->format("Y-m-d H:i:s"),
            "updated_at"=>Carbon::now()->format("Y-m-d H:i:s"),
        ];
    }
}