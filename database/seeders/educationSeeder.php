<?php

namespace Database\Seeders;

use App\Models\education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class educationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all student IDs
        $studentIds = education::pluck('id')->toArray();

        // Create 10 projects, each assigned a random student ID
        education::factory(10)->create([
            'student_id' => $studentIds[array_rand($studentIds)],
        ]);
    }
}
