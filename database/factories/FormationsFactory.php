<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Diplom;
use App\Model\Formation;
use Faker\Generator as Faker;

$factory->define(Formation::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'start_date'=> $faker->date(),
        'end_date'=>$faker->date(),
        'diplom_id'=>function(){
                return Diplom::all()->random();
        }

    ];
});
