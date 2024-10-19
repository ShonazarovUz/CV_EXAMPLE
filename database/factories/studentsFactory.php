<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class studentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name'=>$this->faker->firstName,
            'last_name'=>$this->faker->lastName,
            'nt_id'=>$this->faker->randomNumber,
            'photo'=>$this->faker->word,
            'phone'=>$this->faker->phoneNumber,
            'profession'=>$this->faker->word,
            'biography'=>$this->faker->text,
        ];
    }
}
