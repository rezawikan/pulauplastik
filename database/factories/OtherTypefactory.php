<?php

use App\Models\OtherType;
use Faker\Generator as Faker;

$factory->define(OtherType::class, function (Faker $faker) {
    return [
        'type' => $faker->sentence(1)
    ];
});
