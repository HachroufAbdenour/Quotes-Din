<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'user_name' =>fake()->userName,
        'email'  =>fake()->unique()->safeEmail,
        'password' => bcrypt('password'), // You may hash it or make it random.
        'birth_date' => fake()->date(),
        'nationality' =>fake()->country,
        'gender' => fake()->randomElement(['male', 'woman']),
        'status' => fake()->randomElement(['free','premium']),
        'type' => fake()->randomElement(['admin','client']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
