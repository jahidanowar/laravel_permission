<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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

        $categories = Category::factory(10)->create();

        $categories->each(function($category){
            $category->posts()->saveMany(Post::factory(10)->make());
        });


    }
}
