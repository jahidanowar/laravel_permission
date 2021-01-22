<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = User::create(['name' => 'Jahid', 'email' => 'admin@admin.com', 'password' => bcrypt('password')]);
        $user->role()->attach('2');

        $categories = Category::factory(10)->create();

        $posts = Post::factory(10)->create();

    }
}
