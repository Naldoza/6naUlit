<?php

$factory->define(App\Roles::class, function (Faker\Generator $faker) {
   

    return [
        'UserType' => $faker->sentence,
    ];
});
