<?php

namespace Database\Seeders;

use App\Models\skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class skillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       skills::factory(10);  
    }
}
