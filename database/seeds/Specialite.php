<?php

use Illuminate\Database\Seeder;
use App\Specialite as Specialites;
class Specialite extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialites = [
            'Nouvelles Dynamiques des Droits de l\'homme',
            'Finance Audit et Contrôle de gestion',
            'Gros œuvres',
            'Réseau Informatique',
            'Secrétariat de direction',
            'Chimie',
            'Chimie organique/ chimiométrie',
            'Image et son',
            'Anglais',
            'Développement informatique',
            'Management de RH',
            'Management des entreprises sociales et territoires',
            'Economie et Gestion',
            'Informatique administration du personnel',
            'CHARIAA',
            'Chimie Minérale',
            'Audio Visuel',
            'Actuariat et gestion des risques'
        ];
        foreach (   $specialites as    $specialites) {
            Specialites::create(['Specialite' => $specialites]);
        }
    }
}
