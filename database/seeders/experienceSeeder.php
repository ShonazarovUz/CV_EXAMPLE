<?php

namespace Database\Seeders;

use App\Models\education;
use App\Models\language;
use App\Models\students;
use Illuminate\Database\Seeder;

class experienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentIds = students::pluck('id')->toArray();

        education::factory(10)->create([
            'student_id' => $studentIds[array_rand($studentIds)],
        ]);
    }
}
