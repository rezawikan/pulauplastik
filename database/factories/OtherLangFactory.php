<?php

use App\Models\OtherLang;
use Faker\Generator as Faker;

$factory->define(OtherLang::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3)
    ];
});
