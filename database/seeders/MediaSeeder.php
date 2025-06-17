<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();

        if ($posts->count() === 0) {
            echo "No posts found, please run PostSeeder first.\n";
            return;
        }

        // Create media entries for random posts
        Media::factory(20)->create([
            'post_id' => $posts->random()->id,
        ]);
    }
}