<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MemoTest>
 */
class MemoTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Level ' . fake()->unique()->colorName(),
            'images' => [fake()->imageUrl(), fake()->imageUrl(), fake()->imageUrl(), fake()->imageUrl()]
        ];
    }
}
