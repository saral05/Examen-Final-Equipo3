<?php

use Illuminate\Database\Seeder;
use App\Salones;
use App\Students;
use App\Materias;

use Illuminate\Support\Facades\BD;
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
        factory(Salones::class,50)->create();
        factory(Materias::class,50)->create();
        factory(Students::class,50)->create();
    }
}
