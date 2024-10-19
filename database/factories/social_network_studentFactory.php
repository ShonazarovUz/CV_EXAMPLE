<?php

namespace Database\Factories;
use App\Models\social_network;
use App\Models\students;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class social_network_studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'social_network_id' => social_network::factory(),
            'student_id' => students::factory(),
            'name'=>$this->faker->name,
        ];
    }
}
