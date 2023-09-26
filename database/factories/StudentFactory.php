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
            'name' => $this->faker->name(),
            'nisn' => $this->faker->randomNumber(8, true),
            'gender' => $this->faker->randomElement(['Laki-laki', 'Prempuan']),
            'birthday' => $this->faker->date(),
            'address' => $this->faker->address(),
            'class_year' => $this->faker->year(),
            'image' => '',
            'qrimage' => ''
        ];
    }
}
