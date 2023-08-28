<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Location;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => \App\Models\Service::factory(),
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'locality' => $this->faker->city,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zip_code' => $this->faker->postcode,
            'administrative_area_level_1' => $this->faker->stateAbbr,
            'country' => $this->faker->country,
        ];
    }
}
