<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Diplom;
use Faker\Generator as Faker;

$factory->define(Diplom::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,


    ];
});
