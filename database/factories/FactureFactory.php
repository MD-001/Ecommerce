<?php

namespace Database\Factories;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facture>
 */
class FactureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "total" => fake()->randomFloat(2,500,10000),
            "date" => fake()->dateTime(),
            "commande_ref" => fake()->randomElement(Commande::pluck("ref"))
        ];
    }
}
