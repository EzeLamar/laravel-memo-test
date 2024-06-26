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
        $image1 = fake()->imageUrl();
        $image2 = fake()->imageUrl();
        return [
            'name' => 'Level ' . fake()->unique()->colorName(),
            'images' => [$image1, $image2, $image1, $image2]
        ];
    }
}
