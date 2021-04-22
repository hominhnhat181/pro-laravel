<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Category;
use Faker\Generator as Faker;

$factory->define(App\App::class, function (Faker $faker) {
    return [
        'appName'=>$faker->name(20),
        // 'categories_id'=> Category::all()->random()->id,
        'categories_id'=>1
    ];
});
