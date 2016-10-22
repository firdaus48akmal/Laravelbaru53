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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Mahasiswa::class, function (Faker\Generator $faker) {
    return [
      'nim'   => $faker->numerify('H1G1#####'),
      'nama'  => $faker->firstName($gender = null|'male'|'female').' '.$faker->lastName,
        // 'nim' => 'H1G1'.str_random(4),
        // 'nama' => str_random(5). ' ' .str_random(6),
    ];
});
