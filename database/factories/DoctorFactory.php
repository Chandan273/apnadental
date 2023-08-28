<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doctor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location_id' => \App\Models\Location::factory(),
            'service_id' => \App\Models\Service::factory(),
            'company_name' => $this->faker->company,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(), // Add this line
            'age' => $this->faker->numberBetween(25, 60),
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'email_1' => $this->faker->unique()->safeEmail,
            'email_2' => $this->faker->unique()->safeEmail,
            'rating' => $this->faker->randomFloat(2, 1, 5),
            'phone' => $this->faker->phoneNumber,
            'specialization' => $this->faker->word,
            'experience' => $this->faker->numberBetween(1, 20),
            'website' => $this->faker->url,
            'location' => $this->faker->address,
            'work_timings' => $this->faker->sentence,
            'fee' => $this->faker->numberBetween(50, 200),
        ];
    }
}
