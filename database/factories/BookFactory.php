<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->city,
        'author' => $faker->name,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'link' => $faker->url,
        'featured' => $faker->boolean($chanceOfGettingTrue = 50),
    ];
});
