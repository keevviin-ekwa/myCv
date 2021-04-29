<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Resume;
use App\User;
use Faker\Generator as Faker;

$factory->define(Resume::class, function (Faker $faker) {
    return [
        'description'=>$faker->text,
        'user_id'=>function(){
            return User::all()->random();
        }
    ];
});
