<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Experience;
use Faker\Generator as Faker;

$factory->define(Experience::class, function (Faker $faker) {
    return [
        'function'=>$faker->name,
        'start_date'=> $faker->date(),
        'end_date'=>$faker->date(),
        'place'=>$faker->city
    ];
});
