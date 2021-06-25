<?php

namespace Database\Factories;

use App\Models\DeliveryNote;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryNoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeliveryNote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_of_delivery_note' => $this->faker->date(),
            'customer_id' => rand(1, 100),
            'user_id' => rand(1, 50),
            'total' => rand(1, 10000),
            'delivery_price' => $this->faker->numerify(),
            'note' => $this->faker->text(50),
        ];
    }
}
