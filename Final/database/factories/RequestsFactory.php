<?php

$factory->define(App\Requests::class, function (Faker\Generator $faker) {
   

    return [
        'Subject' => $faker->sentence,
        'area' => $faker->sentence,
    	'RequestingParty' => $faker->sentence,
    	'Recommended' => $faker->sentence,
    	'materialsNeeded' => $faker->sentence,
    	'workDescription' => $faker->paragraph(3),
    	
});
