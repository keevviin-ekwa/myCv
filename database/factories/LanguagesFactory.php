<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Language;
use App\User;
use Faker\Generator as Faker;

$factory->define(Language::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'level'=>$faker->word,
        'user_id'=> function(){
            return User::all()->random();
        }
    ];
});
