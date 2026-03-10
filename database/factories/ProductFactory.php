<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            "category_id" => rand(1, 5),
            "name" => [
                "uz" => fake()->sentence(3),
                "en" => "lorem ipsum",
            ],

            "price" => rand(50000, 1000000),

            "description" => [
                "uz" => fake()->paragraph(15),
                "en" => "lorem ipsum dolor sit amet"
            ]
        ];
    }
}
