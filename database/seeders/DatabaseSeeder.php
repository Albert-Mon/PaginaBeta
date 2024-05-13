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
       Contacto::factory(50)->create();
    }
}
