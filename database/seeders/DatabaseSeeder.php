<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test2@example.com',
        ]);
        \App\Models\Item::factory(3)->create([
          'userId' => 1
        ]);
        \App\Models\Item::factory(5)->create([
          'userId' => 2
        ]);
        \App\Models\Item2::factory(5)->create([
          'userId' => 1
        ]);
        \App\Models\Item2::factory(10)->create([
          'userId' => 2
        ]);
    }
}
