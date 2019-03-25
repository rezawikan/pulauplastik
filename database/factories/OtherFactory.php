<?php

use App\Models\Other;
use Faker\Generator as Faker;

$factory->define(Other::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'link' => 'https://via.placeholder.com/150',
        'file' => 'https://via.placeholder.com/550'
    ];
});