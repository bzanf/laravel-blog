<?php

namespace Database\Seeders;

use App\Models\Post;
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

        User::factory()->create([
            'id'=> 1,
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'role'=> 'admin',
            'password'=> bcrypt('admin1234'),
        ]);

        Post::factory(30)->create();
    }
}
