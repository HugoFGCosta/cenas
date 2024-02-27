<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'birth'=>$faker->dateTimeThisCentury,
        'color'=>$faker->colorName,
        'person_id'=>rand(1,100),
        'created_at'=>now(),
        'updated_at'=>now()
    ];
});
