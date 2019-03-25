<?php

use App\Models\Media;
use Faker\Generator as Faker;

$factory->define(Media::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence(3),
      'photo' => 'https://via.placeholder.com/400',
      'link' => 'https://via.placeholder.com/400',
    ];
});
