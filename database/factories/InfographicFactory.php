<?php

use App\Models\Infographic;
use Faker\Generator as Faker;

$factory->define(Infographic::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence(3),
      'photo' => 'https://via.placeholder.com/400'
    ];
});
