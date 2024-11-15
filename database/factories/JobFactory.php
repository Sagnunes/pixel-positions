<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['€50,000 EUR', '€90,000 EUR', '€150,000 EUR']),
            'location' => 'Remote',
            'schedule' => fake()->randomElement(['Full Time','Part Time']),
            'url' => fake()->url,
            'featured' => false,
            'employer_id'=>Employer::factory(),
        ];
    }
}
