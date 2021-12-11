<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Salones;
use App\Materia;
use App\Student;
use Faker\Generator as Faker;

$factory->define(student::class, function (Faker $faker) {
    return [
        'matricula'=>$faker->unique()->randomNumber(8),
        'nombre'=>$faker->name,
        'apellido_paterno'=>$faker->LastName,
        'apellido_materno'=>$faker->Name,
        //definimos llaves foraneas
        'salon_id'=> Salones::all()->random()->id_salon,
        'materias_id'=> Materia::all()->random()->id,
    ];
});
