<?php

use Illuminate\Database\Seeder;
use App\Etablissement as Etablissements ; // Use the model without aliasing

class Etablissement extends Seeder // Rename class to EtablissementSeeder
{
    /**
     *
     */
    public function run()
    { $etablissements = [
        ['etablissement' => 'Faculté CHARIAA (CHARIAA) كلية الشريعة'],
    ['etablissement' => 'Faculté des Sciences Dhar Mahraz (FSDM) كلية العلوم ظهر المهراز'],
    ['etablissement' => 'Faculté des Sciences Juridiques, Economiques et Sociales (FSJES) كلية العلوم القانونية والاجتماعية'],
    ['etablissement' => 'Faculté des Lettres et des Sciences Humaines Dhar Mahraz (FLDM) كلية الأداب والعلوم الانسانية ظهر المهراز'],
    ['etablissement' => 'Faculté des Lettres et des Sciences Humaines Saiss (FLS) كلية الأداب والعلوم الانسانية سايس'],
    ['etablissement' => 'Faculté de Médecine et de Pharmacie (FMPDF) كلية الطب والصيدلة وطب الأسنان'],
    ['etablissement' => 'Faculté des Sciences et Techniques (FST) كلية العلوم والتقنيات'],
    ['etablissement' => 'Faculté Polydisciplinaire de Taza (FPT) كلية متعددة التخصصات بتازة'],
    ['etablissement' => 'Ecole Supérieure de Technologie (EST) المدرسة العليا للتكنولوجيا'],
    ['etablissement' => 'Ecole Nationale des Sciences Appliquées (Ensa) المدرسة الوطنية للعلوم التطبيقية'],
    ['etablissement' => 'Ecole Nationale de Commerce et de Gestion (Encg) المدرسة الوطنية للتجارة والتسيير'],
    ['etablissement' => 'Ecole Normale Supérieure (Ens) المدرسة العليا للأساتذة'],
    ['etablissement' => 'Institut des Sciences du Sport (ISS) معهد علوم الرياضة'],
    ['etablissement' => 'Présidence de l\'Université Sidi Mohamed Ben Abdellah (USMBA) رئاسة جامعة سيدي محمد بن عبد الله'],
        
    ];
        foreach ($etablissements as $etablissement) {
            Etablissements::create($etablissement); // Pass the array directly
        }
    }
}