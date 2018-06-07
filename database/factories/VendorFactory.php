<?php

use Faker\Generator as Faker;

$factory->define(App\Vendor::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'active' => 0,
    ];
});
