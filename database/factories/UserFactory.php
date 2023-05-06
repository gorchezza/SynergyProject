<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'second_name' => $this->faker->firstName(),
            'three_name' => $this->faker->lastName(),
            'id_passport' => mt_rand(1_000_000_000, 10_000_000_000),
            'issued' => 'МВД',
            'register_date' => $this->faker->date('Y-m-d', 'now'),
            'brith_date' => '1',
            'brith_place' => '1',
            'resident_place' => '1',
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => NULL,
            'password' => Hash::make('123'), 
            'avatar' => 'storage\default\default.png',
            'nickname' => $this->faker->userName(),
            'user_id' => '#' . mt_rand(1000, 10_000),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
