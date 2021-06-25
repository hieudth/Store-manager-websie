<?php

namespace Database\Factories;

use App\Models\ReceiptDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReceiptDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'receipt_id' => rand(1, 100),
            'product_id' => rand(1, 100),
            'quantity' => rand(1, 1000),
            'price' => $this->faker->numerify(),
            'tax' => $this->faker->numerify(),
        ];
    }
}
