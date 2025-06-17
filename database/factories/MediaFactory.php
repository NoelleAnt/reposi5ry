<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => fake()->imageUrl(640, 480, 'nature', true),
            'type' => fake()->randomElement(['image', 'video', 'audio']),
            'post_id' => fake()->randomDigitNotNull(), // Assuming post_id is a foreign key
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}