<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Partnership;
use App\Models\Seller;

class PartnershipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Partnership::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(["submitted","accepted","rejected","review"]),
            'rejection_reason' => $this->faker->text(),
            'take_all_products' => $this->faker->boolean(),
            'seller_id' => Seller::factory(),
            'notes' => $this->faker->text(),
        ];
    }
}