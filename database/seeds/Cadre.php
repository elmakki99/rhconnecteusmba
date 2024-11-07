<?php

use Illuminate\Database\Seeder;
use App\Cadre as Cadres;
class Cadre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cadres = [
            'Administrateur',
            'Adjoint technique',
            'Professeur de l’enseignement supérieur assistant',
            'Technicien',
            'Ingénieur en chef',
            'Appui pédagogique',
        ];

        foreach ($cadres as $cadre) {
            Cadres::create(['cadre' => $cadre]);
        }
    }
}
