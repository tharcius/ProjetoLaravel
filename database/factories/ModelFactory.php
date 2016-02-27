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

$factory->define(ProjetoX\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(ProjetoX\Entities\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'responsible' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'obs' => $faker->sentence,
    ];
});

$factory->define(ProjetoX\Entities\Project::class, function (Faker\Generator $faker) {
   return [
        'name' => $faker->company,
        'description' => $faker->realText(),
        'progress' => $faker->sentence,
        'status' => $faker->word,
        'due_date' => $faker->dateTime,
        'client_id' => $faker->randomElement(\ProjetoX\Entities\Client::lists('id')->toArray()),
        'owner_id' => $faker->randomElement(\ProjetoX\Entities\Client::lists('id')->toArray()),
    ];
});
