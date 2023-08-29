<?php

namespace Database\Factories;

use App\Models\User;
use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email_verified_at' => now(),
            'photo' => fake()->imageUrl(),
            'phone' => fake()->phoneNumber(),
            'username' => fake()->userName(),
            'address' => fake()->streetAddress(),
            'email' => fake()->unique()->safeEmail(),
            'role' => fake()->randomElement(['user', 'agent']),
            'status' => fake()->randomElement(['active', 'inactive']),
            'password' => Hash::make('12121212'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
