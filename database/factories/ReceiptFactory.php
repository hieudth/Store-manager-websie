<?php

namespace Database\Factories;

use App\Models\Receipt;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receipt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_of_receipt' => $this->faker->date(),
            'supplier_id' => rand(1, 20),
            'user_id' => rand(1, 100),
            'total' => rand(1, 10000),
            'note' => $this->faker->text(50),
        ];
    }
}
