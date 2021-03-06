<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
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
        // $user = User::factory()->create([
        //     'name' => 'Duy Nguyen'
        // ]);

        // Post::factory(5)->create([
        //     'user_id' => $user->id
        // ]);

        Post::factory(30)->create();
        Comment::factory(10)->create();
    }
}
