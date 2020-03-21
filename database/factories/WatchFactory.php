<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Watch;
use Faker\Generator as Faker;

$factory->define( Watch::class, function ( Faker $faker ) {
    return [
        'brand'          => $faker->name,
        'name'           => $faker->name,
        'reference'      => $faker->randomAscii,
        'year'           => $faker->year,
        'featured_image' => $faker->imageUrl()
    ];
} );
