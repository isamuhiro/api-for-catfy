<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ? : $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\Image($faker));
    $faker->addProvider(new Faker\Provider\pt_BR\Person($faker));
    return [
        'name' => $faker->title() . ' ' . $faker->firstNameMale(),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 5, $max = 10),
        'img' => $faker->imageUrl($width = 640, $height = 480, 'cats')
    ];
});
