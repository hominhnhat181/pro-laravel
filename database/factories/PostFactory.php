<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Category;
$factory->define(App\Post::class, function (Faker $faker) {
    return [
      'title'=>$faker->text(20),
      'author'=>$faker->name,
      'desc'=>$faker->text(100),
      'text'=>$faker->text(200),
      'categories_id'=> Category::all()->random()->id,
        // 'categories_id'=>'factory:App\Post',
    // 'categories_id'=> $faker-> rand(1,5),
    ];
});
