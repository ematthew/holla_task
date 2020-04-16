<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClientBill;
use Faker\Generator as Faker;

$factory->define(ClientBill::class, function (Faker $faker) {
    return [
        'username' => $faker->username,
        'mobile_number' => $faker->phoneNumber,
        'amount' => rand(1, 9).rand(000,999)
    ];
});
