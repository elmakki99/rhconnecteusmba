<?php

use Illuminate\Database\Seeder;
use App\Role as Roles;
class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Admin',
            'Sécretaire Générale',
            'Chef Division',
            'RH cadre Administratif',
            'RH cadre Pédagogique',
            'Standard', 
        ];
        foreach (  $roles as    $roles) {
            Roles::create(['role' => $roles]);
        }
    }
}
