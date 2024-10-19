<?php

namespace Database\Seeders;

use App\Models\social_network;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class social_networkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        social_network::factory(10);  
    }
}
