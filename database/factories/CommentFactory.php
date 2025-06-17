<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => fake()->paragraph(),
            'user_id' => fake()->randomDigitNotNull(), // Assuming user_id is a foreign key
            'post_id' => fake()->randomDigitNotNull(), // Assuming post_id is a foreign key
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}