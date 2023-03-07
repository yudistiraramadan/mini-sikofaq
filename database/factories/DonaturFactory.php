<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Provider\en_US\Address;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donatur>
 */
class DonaturFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker\Factory::create();
        return [
        ];
    }
}
