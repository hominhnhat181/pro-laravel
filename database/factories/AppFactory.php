<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Category;
use Faker\Generator as Faker;
use App\Type;
$factory->define(App\App::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(15),
        'title'=>$faker->title(50),
        'desc'=>$faker->text(100),
        // 'categories_id'=> Category::all()->random()->id,
        'categories_id'=>2,
        'types_id'=>Type::all()->random()->id,
    ];
});
