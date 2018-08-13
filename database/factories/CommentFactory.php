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

$factory->define(App\Models\Comment::class, function (Faker $faker) {

    $biasedEnabled = rand(0,10);
    return [
        'comment' =>$faker->text(),
        'post_id' => 1,
        'published' => ($biasedEnabled < 7) ? 1 : 0
    ];
});
