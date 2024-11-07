<?php

use Illuminate\Database\Seeder;
use App\Service as Services;
class Service extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            'Service Ressources Humaines',
            'Chauffeur',
            'Service des affaires Académiques et Pédagogiques',
            'Standard',
            'Service Apogée',
            'Service des affaires Economiques',
        ];
        foreach (  $services as   $services) {
            Services::create(['service' =>   $services]);
        }
    }
}
