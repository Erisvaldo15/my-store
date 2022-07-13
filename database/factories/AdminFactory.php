<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->email(),
            "password" => Hash::make('erisvaldo'),
        ];
    }

}
