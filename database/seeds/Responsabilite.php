<?php

use Illuminate\Database\Seeder;
use App\Responsabilite as Responsabilites;
class Responsabilite extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $responsabilites = [
            'Président',
            'Doyen',
            'Directeur',
            'Directeur Adjoint',
            'Vice-Doyen',
            'Vise-Président',
            'Chef service',
            'Chef Division',
            'Secrétaire Générale',
            'Doyen Par intérim',
            'Président Par intérim',
            'Directeur Par intérim',
        ];
        foreach ( $responsabilites as  $responsabilites) {
            Responsabilites::create(['Responsabilite' =>  $responsabilites]);
        }
    }
}
