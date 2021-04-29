<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Lien;
use App\User;
use Faker\Generator as Faker;

$factory->define(Lien::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'link'=>$faker->sentence,
        'icon'=>$faker->image(),
        'user_id'=> function(){
            return User::all()->random();
        }
    ];
});
