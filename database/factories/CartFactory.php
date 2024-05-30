<?php

namespace Database\Factories;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10), // Adjust range as per your user IDs
            'product_type' => $this->faker->randomElement(['homme', 'femme', 'niche']),
            'product_id' => $this->faker->numberBetween(1, 100), // Adjust range as per your product IDs
            'quantity' => $this->faker->numberBetween(1, 5), // Adjust range as needed
        ];
    }
}
