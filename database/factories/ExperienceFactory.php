<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
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
            'name' => $this->faker->company, 
            'description' => $this->faker->paragraph,
            'start_data' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'end_data' => $this->faker->dateTimeBetween('now', '+5 years'),
        ];
    }
}
