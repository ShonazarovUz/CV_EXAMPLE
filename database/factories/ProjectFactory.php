<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => \App\Models\Student::factory(), 
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(), 
            'source_link' => $this->faker->url(),
            'demo_link' => $this->faker->url(),
        ];
    }
}
