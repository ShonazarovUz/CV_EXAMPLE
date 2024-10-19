<?php

namespace Database\Seeders;

use App\Models\social_network;
use App\Models\SocialNetwork;
use App\Models\Student;
use App\Models\students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialNetworkStudentSeeder extends Seeder
{
    public function run(): void
    {
        $students = students::all();
        $socialNetworks = social_network::all();

        foreach ($students as $student) {
            $socialNetworkIds = $socialNetworks->random(rand(1, 3))->pluck('id')->toArray();

            foreach ($socialNetworkIds as $socialNetworkId) {
                $student->socialNetworks()->attach($socialNetworkId, [
                    'username' => 'user_' . $student->id . '_' . $socialNetworkId,
                ]);
            }
        }
    }

}
