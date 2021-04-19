<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Apartment::class, function (Faker $faker) {
    return [
        'address' => $faker->streetAddress,
        'district' => $faker->streetSuffix,
        'town' => $faker->city,
        'price1_2' => $faker->numberBetween(1500, 2000),
        'price3_9' => $faker->numberBetween(1000, 1499),
        'price10_29' => $faker->numberBetween(800, 999),
        'price30' => $faker->numberBetween(700, 799),
        'rooms' => $faker->numberBetween(1, 5),
        'places' => $faker->numberBetween(1, 6),
        'facilities' => ['elevator' => 0, 'balcony' => 0, 'floor' => null, 'wifi' => 0, 'parking' => 1, 'washer' => 1, 'iron' => 1, 'furniture' => 1, 'microwave' => 0, 'tv' => 0, 'hairdryer' => 0],
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2)
    ];
});
