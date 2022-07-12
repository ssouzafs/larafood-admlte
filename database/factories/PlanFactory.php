<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->sentence(3);
        return [
            'name' => $name,
            'url' => Str::slug($name),
            'description' => fake()->sentence(8),
            'price' => fake()->randomFloat(2, 0, 1000)
        ];
    }
}
