<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = App\Models\Post::all();
        foreach ($posts as $post) {
            $randomPosts = rand(1,3);
            factory(App\Models\Comment::class, $randomPosts)->create(['post_id' => $post->id]);
        }
    }
}
