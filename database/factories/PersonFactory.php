<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'address_id'=>rand(1,100),
        'name'=> $faker->name,
        'birth'=>$faker->dateTimeThisCentury,
        'email'=>$faker->freeEmail,
        'created_at'=>now(),
        'updated_at'=>now()
    ];
});
