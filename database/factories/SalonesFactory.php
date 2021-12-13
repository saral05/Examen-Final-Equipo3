<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Salones;
use Faker\Generator as Faker;

$factory->define(Salones::class, function (Faker $faker) {
    return [
        // $table->bigIncrements('id_salon');
        'nombre'=>$faker->name,
               
    ];
});
