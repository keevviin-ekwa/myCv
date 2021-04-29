<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Experience;
use App\Model\Tasks;
use Faker\Generator as Faker;

$factory->define(Tasks::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'experience_id'=> function(){
            return Experience::all()->random();
        }
    ];
});
