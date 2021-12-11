<?php

use Illuminate\Database\Seeder;
use App\Salones;
use App\Materia;
use App\Student;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Salones::class,10)->create();
        factory(Materia::class,10)->create();
        factory(Student::class,10)->create();
    }
}
