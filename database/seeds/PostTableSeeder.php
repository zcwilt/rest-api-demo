<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();
        foreach ($users as $user) {
            $randomPosts = rand(1,6);
            factory(App\Models\Post::class, $randomPosts)->create(['user_id' => $user->id]);
        }

    }
}
