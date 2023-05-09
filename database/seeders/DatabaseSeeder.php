<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Version;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Version::factory()->createMany([
            ['title' => '8.61', 'release_date' => '2021-09-14'],
            ['title' => '8.60', 'release_date' => '2021-09-13'],
            ['title' => '8.59', 'release_date' => '2021-09-07'],
            ['title' => '8.58', 'release_date' => '2021-09-01'],
            ['title' => '8.57', 'release_date' => '2021-08-30'],
            ['title' => '8.56', 'release_date' => '2021-08-25'],
        ]);

    }
}
