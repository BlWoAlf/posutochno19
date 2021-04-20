<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ApartmentPhoto::class, function (Faker $faker) {
    return [
        'id_apartment' => function() {
            return App\Models\Apartment::first()->id;
        },
        // 'photo_url' => $faker->image(storage_path(), 1, 1),
    ];
});
