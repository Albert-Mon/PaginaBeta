<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Contacto;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       //$this->call(ContactoSeeder::class);
       //al momento de hacer el migration fres, se crean 40 a 50 registros con datos aleatorios.
       Contacto::factory(50)->create();
    }
}
