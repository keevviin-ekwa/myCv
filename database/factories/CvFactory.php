<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\cv;
use App\Model\Reference;
use App\User;
use Faker\Generator as Faker;

$factory->define(cv::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'user_id'=>function(){
         return User::all()->random();
        },
        'reference_id'=>function(){
            return Reference::all()->random();
        }
    ];
});
