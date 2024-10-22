<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName, 
            'nt_id' => $this->faker->randomNumber,
            'photo' => $this->faker->imageUrl(640, 480, 'people'), 
            'profession' => $this->faker->jobTitle,
            'phone' => $this->faker->phoneNumber,
            'biography' => implode(' ', $this->faker->words(4)),
        ];
    }
}
