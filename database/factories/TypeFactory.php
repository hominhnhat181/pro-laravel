<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Category;

$factory->define(App\Type::class, function (Faker $faker) {
    return [
     'typeName'=>$faker->name(15),
     'categories_id'=>rand(1,2),
      
       ];
});
