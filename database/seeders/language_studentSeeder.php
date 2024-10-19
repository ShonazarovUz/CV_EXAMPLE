<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\students;
use Illuminate\Database\Seeder;

class LanguageStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (students::count() === 0) {
            students::factory()->count(10)->create(); 
        }

        if (Language::count() === 0) {
            Language::factory()->count(5)->create();
        }

        $students = Students::all();
        $languages = Language::all();

        foreach ($students as $student) {
            $languageIds = $languages->random(rand(1, $languages->count()))->pluck('id')->toArray();

            $student->languages()->attach($languageIds);
        }
    }
}

