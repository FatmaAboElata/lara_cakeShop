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
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(2),
            'description' => $this->faker->text(100),
            'price' => $this->faker->numberBetween(70,400),
            'sale_price' => $this->faker->numberBetween(70,400),
            'category' => $this->faker->word(1),
            'type' => $this->faker->word(1),
            'image' => $this->faker->word(1),
            'image1' => $this->faker->word(1),
            'image2' => $this->faker->word(1),
        ];
    }
}
