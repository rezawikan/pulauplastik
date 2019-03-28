<?php

use Faker\Generator as Faker;
use App\Models\Upcoming;
use Carbon\Carbon;

$factory->define(Upcoming::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence(3),
      'address' => $faker->address,
      'date' => Carbon::now(),
      'additional_information' => null,
      'link' => null
    ];
});
