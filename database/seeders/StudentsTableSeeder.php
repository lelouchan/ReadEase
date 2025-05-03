<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        Student::create([
            'name' => 'Albiniga, Alexander V.A.',
            'section' => 'Narra',
            'grade_level' => 'Grade 7'
        ]);

        Student::create([
            'name' => 'Dela Cruz, Juan P.',
            'section' => 'Narra',
            'grade_level' => 'Grade 7'
        ]);

        Student::create([
            'name' => 'Santos, Maria L.',
            'section' => 'Narra',
            'grade_level' => 'Grade 7'
        ]);
    }
} 