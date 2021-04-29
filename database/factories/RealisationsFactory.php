<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Realisation;
use App\User;
use Faker\Generator as Faker;

$factory->define(Realisation::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'description'=>$faker->text,
        'link'=>$faker->text,
        'user_id'=> function(){
            return User::all()->random();
        }
    ];
});
