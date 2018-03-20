<?php

use Faker\Generator as Faker;

//  Add the model name: "App\Model" --> "App\Article" !!!
$factory->define(App\Article::class, function (Faker $faker) {
    return [
        //  Set up the seeder for the "articles"-table
        'title' => $faker->text(50),
        'body' => $faker->text(200)
    ];
});
