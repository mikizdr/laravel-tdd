<?php

use Faker\Generator as Faker;

$factory->define(App\Beverage::class, function (Faker $faker) {
    
    $types = ['wine', 'beer', 'brandy', 'water', 'sode', 'juice'];
    shuffle($types);

    return [
        'name' => $faker->word,
        'type' => $types[0],
    ];
});
