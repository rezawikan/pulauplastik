<?php

use App\Models\Publication;
use Faker\Generator as Faker;

$factory->define(Publication::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence(3),
      'photo' => 'https://via.placeholder.com/400',
      'link' => 'https://via.placeholder.com/400',
    ];
});
