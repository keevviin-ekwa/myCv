<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\cv;
use App\Model\Loisir;
use App\User;
use Faker\Generator as Faker;

$factory->define(Loisir::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'user_id'=>function(){
            return User::all()->random();
        },
        'cv_id'=>function(){
            return Cv::all()->random();
        }

    ];
});
