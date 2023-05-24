<?php

namespace Database\Factories;

use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LigneCommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "sous_total" => fake()->randomFloat(2,500,10000),
            "qte_produit" => fake()->randomDigitNotNull(),
            "commande_ref" => fake()->randomElement(Commande::pluck("ref")),
            "produit_ref" => fake()->randomElement(Produit::pluck("ref"))
        ];
    }
}
