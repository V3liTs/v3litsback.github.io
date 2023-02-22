<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'user_id' => factory(App\User::class),
        'slug' => $faker->slug,
        'keywords' => $faker->text,
        'description' => $faker->text,
        'content' => $faker->paragraph,
    ];
});
