<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ApartmentPhoto::class, function (Faker $faker) {
    return [
        'id_apartment' => function() {
            return App\Models\Apartment::first()->id;
        },
        'photo_url' => $faker->uuid. '.jpg' //Ну типу ці картинки вже сущесвуют в папці)
    ];
});
