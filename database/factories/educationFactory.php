<?php

namespace Database\Factories;

use App\Models\students;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class educationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id'=>students::factory(),
            'name'=>$this->faker->name,
            'description'=>$this->faker->text,
            'start_data'=>$this->faker->time,
            'end_data'=>$this->faker->time,
        ];
    }
}
