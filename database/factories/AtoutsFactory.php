<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Atout;
use App\Model\cv;
use App\User;
use Faker\Generator as Faker;

$factory->define(Atout::class, function (Faker $faker) {
    return [
        'name'=>$faker->title,
        'user_id'=>function(){
            return User::all()->random();
        },
        'cv_id'=>function(){
            return Cv::all()->random();
        }
    ];
});
