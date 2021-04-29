<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Reference;
use Faker\Generator as Faker;

$factory->define(Reference::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'enterprise'=>$faker->company,
        'function'=>$faker->name,
        'phone'=>'655743583',
        'email'=>$faker->companyEmail

    ];
});
