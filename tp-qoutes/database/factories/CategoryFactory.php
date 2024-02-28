<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
 use App\Models\User;
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
                "name" => fake()->name(),
                "logo" => fake()->image(),
                "is_free" => fake()->boolean(),
                "type" => fake()->randomElement(['quote','theme']),
                "categorible_type" => 'app\Models\Quote',
                "categorible_id" => fake()->numberBetween(0, 99),
                "created_by" => fake()->randomElement(User::pluck('id')),
            //
        ];
    }
}
