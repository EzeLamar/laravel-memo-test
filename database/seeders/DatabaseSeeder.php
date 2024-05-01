<?php

namespace Database\Seeders;

use App\Models\MemoTest;
use App\Models\User;
use Database\Factories\UserFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MemoTestSeeder::class,
            GameSessionSeeder::class
        ]);
    }
}
