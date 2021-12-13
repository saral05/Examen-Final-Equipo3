<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Students;
use App\Salones;
use App\Materias;

use Faker\Generator as Faker;

$factory->define(Students::class, function (Faker $faker) {
    return [
        'matricula'=>$faker->unique()->randomNumber(8),
        'nombre'=>$faker->name,
        'apellido_paterno'=>$faker->LastName,
        'apellido_materno'=>$faker->Name,
        //definimos llaves foraneas
        'salones_id'=> Salones::all()->random()->id_salon,
        'materia_id'=> Materias::all()->random()->id,
    ];
});
