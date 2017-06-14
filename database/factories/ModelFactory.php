<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Anime::class, function (Faker\Generator $faker) {

    return [
        'nombre' => $faker->randomElement(['Fairy Tail', 'Dragon Ball Z', 'Naruto Shippuden', 'Bleach', 'One Piece', 'Super Campeones', 'Zenki', 'One Punch Man', 'Shingueki no Kyogin', 'Code Guess', 'Death Note']),
        'descripcion' => $faker->paragraph,
        'imagen' => $faker->randomKey([1,2,3,4,5,6,7,8,9,10]),
    ];
});


$factory->define(App\Episode::class, function (Faker\Generator $faker) {

    return [
        'nombre' => $faker->text,
        'anime_id' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        'link' => 'https://www.youtube.com/watch?v=cUNFmHSjakM',
    ];
});
