<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Student; // Add the Student model
use App\Models\students;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all student IDs
        $studentIds = students::pluck('id')->toArray();

        // Create 10 projects, each assigned a random student ID
        Project::factory(10)->create([
            'student_id' => $studentIds[array_rand($studentIds)],
        ]);
    }
}
