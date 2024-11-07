<?php

use Illuminate\Database\Seeder;
use App\Grade as Grades;
class Grade extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = [
            '3éme Grade',
            '1er Grade',
            '2éme Grade',
            '4éme Grade',
            'Grade Principal',
            'Grade A',
            'Grade B',
            'Grade C',
            'Grade D',
            'Grade A(Med)',
            'Grade B(Med)',
            'Grade C(Med)',
            'Grade D(Med)',
            '2éme Grade(ANC)',
            'Grade Principal (ANC)',
            'Premiere Grade (ANC)',
         

        ];

        foreach ($grades as $grade) {
            Grades::create(['grade' => $grade]);
        }
    }
}
