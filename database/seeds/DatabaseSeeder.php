<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //UserSeeder::class,
            Cadre::class,
            Grade::class,
            etat::class,
            Etablissement::class,
            Responsabilite::class,
            Service::class,
            Specialite::class,
            Role::class,
        ]);
    }
}
