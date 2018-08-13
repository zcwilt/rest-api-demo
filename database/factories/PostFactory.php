<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Post::class, function (Faker $faker) {

    $biasedEnabled = rand(0,10);
    return [
        'title' => $faker->text(20),
        'body' =>$faker->text(),
        'user_id' => 1,
        'published' => ($biasedEnabled < 7) ? 1 : 0
    ];
});
