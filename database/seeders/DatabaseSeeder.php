<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

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
        Category::factory(20)->create();
        $tags = Tag::factory(50)->create();
        $posts = Post::factory(100)->create(); // make();

        foreach($posts as $post) {
            $tagsIds = $tags->random(5)->pluck(5);
            $post->tags()->attach($tagsIds);
        }

    }
}
