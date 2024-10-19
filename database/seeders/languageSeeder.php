<?php

namespace Database\Seeders;

use App\Models\language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class languageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        language::factory(10);
    }
}
