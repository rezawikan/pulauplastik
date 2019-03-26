<?php

use App\Models\Other;
use App\Models\OtherType;
use App\Models\OtherLang;
use Faker\Generator as Faker;

$factory->define(Other::class, function (Faker $faker) {
    return [
        'title'         => $faker->sentence(3),
        'link'          => 'https://via.placeholder.com/150',
        'file'          => 'https://via.placeholder.com/550',
        'other_type_id' => factory(OtherType::class)->create(),
        'other_lang_id' => factory(OtherLang::class)->create()
    ];
});
