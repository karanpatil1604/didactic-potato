<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();
        $user = User::factory()->create([
            'name' => 'John Doe',
        ]);
        Post::factory(30)->create([
            'user_id' => $user->id
        ]);

        // $user = User::factory()->create();
        // $personal = Category::create([
        //     'name' => "Family",
        //     'slug' => "personal",


        // ]);
        // $work = Category::create([
        //     'name' => "Work",
        //     'slug' => "work",


        // ]);
        // $hobbies = Category::create([
        //     'name' => "Hobbies",
        //     'slug' => "hobbies",


        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'slug' => "my-personal-post",
        //     'title' => "My Family Post",
        //     'excerpt' => "<p>Excerpt for first post</p>",
        //     'body' => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos ratione ullam consequuntur unde illo, cum eius dolores nisi eveniet, modi placeat ducimus vero totam! Ex ipsam impedit mollitia explicabo quae? Quasi quas quae, ullam culpa ducimus modi minima libero amet cum distinctio tempora odio perferendis, ab harum rerum optio provident cupiditate sit nihil? Perspiciatis repudiandae voluptatem et commodi eum earum, a, saepe eaque numquam doloribus possimus excepturi consequatur cum! Cupiditate sequi officia, odio eius omnis fugiat non iure, officiis facilis atque vitae maxime eaque aliquid illum! Obcaecati, sed. Ipsam rem ea aspernatur quos doloremque tempora ratione provident molestias? Eveniet, incidunt</p>",

        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'slug' => "my-work-post",
        //     'title' => "My Work Post",
        //     'excerpt' => "<p>Excerpt for work post</p>",
        //     'body' => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos ratione ullam consequuntur unde illo, cum eius dolores nisi eveniet, modi placeat ducimus vero totam! Ex ipsam impedit mollitia explicabo quae? Quasi quas quae, ullam culpa ducimus modi minima libero amet cum distinctio tempora odio perferendis, ab harum rerum optio provident cupiditate sit nihil? Perspiciatis repudiandae voluptatem et commodi eum earum, a, saepe eaque numquam doloribus possimus excepturi consequatur cum! Cupiditate sequi officia, odio eius omnis fugiat non iure, officiis facilis atque vitae maxime eaque aliquid illum! Obcaecati, sed. Ipsam rem ea aspernatur quos doloremque tempora ratione provident molestias? Eveniet, incidunt?</p",

        // ]);
    }
}