<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'color' => $faker->hexColor,
        'description' => $faker->sentence(5),
        'slug'=>$faker->sentence(1),
        //'language_id' => $faker->numberBetween(1, 2),
        'title' => $faker->sentence(5)
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
        'id'=>1,
        'category_id' => $faker->numberBetween(1, 5),
        'content' => implode("<br/><br/>", $faker->paragraphs(8)),
        'description' => $faker->sentence(5),
        'slug'=>$faker->sentence(1),
        'published_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'title' => $faker->sentence(5)
    ];
});