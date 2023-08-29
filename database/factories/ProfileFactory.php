<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profile_image' => fake()->imageUrl('400','300','people'),
            'header_image' => fake()->imageUrl('1560','370','nature'),
            'about' => fake()->text(250),
            'address' => fake()->streetAddress(),
            'github' => fake()->url(),
            'instagram' => fake()->url(),
            'tweeter' => fake()->url(),
        ];
    }
}
