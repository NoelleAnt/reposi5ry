<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $posts = Post::all();

        if ($users->count() === 0 || $posts->count() === 0) {
            echo "No users or posts found, please run UserSeeder and PostSeeder first.\n";
            return;
        }

        // Create comments for random users and posts
        Comment::factory(30)->create([
            'user_id' => $users->random()->id,
            'post_id' => $posts->random()->id,
        ]);
    }
}