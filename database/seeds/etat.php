<?php

use Illuminate\Database\Seeder;
use App\etat as etats;
class etat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etats = [
            'Mise en disponibilité',
            'Mise à disposition',
            'Détachement',
            'Stage/Formation',
            'Année Sabbatique',
            'Sanctions disciplinaires',
            'Fin de carrière (Retraite)',
            'Limite d\'âge',
            'Retraite anticipée',
            'Démission',
            'Révocation',
            'Décès',
            'Actif',
            'Inactif',
        ];

        foreach ( $etats as  $etats) {
            etats::create(['etat' =>  $etats]);
        }
    }
}
