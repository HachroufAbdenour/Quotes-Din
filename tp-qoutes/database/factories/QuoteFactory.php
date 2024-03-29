<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "desc_ar" => fake()->text(),
            "desc_en" => fake()->text(),
            "source_ar" => fake()->name(),
            "source_en" => fake()->name(),
            "category_id" => fake()->randomElement(Category::pluck('id')),
            "created_by" => fake()->randomElement(User::pluck('id')),
        ];
    }
}
