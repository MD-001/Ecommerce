<?php

namespace Database\Factories;

use App\Models\Commande;
use App\Models\ModeLivraison;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livraison>
 */
class LivraisonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "date" => fake()->dateTime(),
            'commande_ref' => fake()->randomElement(Commande::pluck("ref")),
            'mode_livraison_id' => fake()->randomElement(ModeLivraison::pluck("id"))
        ];
    }
}
