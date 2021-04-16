<?php

use Faker\Generator as Faker;

$factory->define(App\Apartment::class, function (Faker $faker) {
    return [
        'id' => function() {
            return factory(App\Apartment::class)->create()->id;
        },
        'address' => $faker->streetAddress,
        'district' => $faker->streetSuffix,
        'price1_2' => $faker->numberBetween(1500, 2000),
        'price3_9' => $faker->numberBetween(1000, 1499),
        'price10_29' => $faker->numberBetween(800, 999),
        'price30' => $faker->numberBetween(700, 799),
        'rooms' => $faker->numberBetween(1, 5),
        'places' => $faker->numberBetween(1, 6),
        'facilities' => '',
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2)
    ];
});
