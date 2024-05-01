<?php

namespace Database\Factories;

use App\Models\MemoTest;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GameSession>
 */
class GameSessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'retries' => 0,
            'numberOfPairs' => 0,
            'state' => 'Started',
            'player_id' => User::factory(),
            'memotest_id' => MemoTest::factory()
        ];
    }
}
