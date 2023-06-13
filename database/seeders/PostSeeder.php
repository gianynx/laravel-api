<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = config('db-boolpress.posts');
        foreach($posts as $post)
        {
            $newPost = new Post();
            $newPost->image = $post['image'];
            $newPost->title = $post['title'];
            $newPost->slug = Str::slug($post['title'], '-');
            $newPost->body = $post['body'];
            $newPost->save();
        }
    }
}
