<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence(2);

        return [
            "banner" => $this->faker->imageUrl(),
            "name" => $name,
            "slug" => Str::slug($name, '-'),
            "description" => $this->faker->sentence(10),
            "price" => $this->faker->randomFloat(1,20,30),
            "quantity" => $this->faker->randomNumber()
        ];
    }
}
