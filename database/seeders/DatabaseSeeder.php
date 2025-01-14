<?php

namespace Database\Seeders;

use App\Models\User;
// use App\Models\PersonalInfo;
use App\Models\Participation;
use App\Models\Convention;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        // PersonalInfo::factory(10)->create();
        // Participation::factory(10)->create();
        Convention::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
