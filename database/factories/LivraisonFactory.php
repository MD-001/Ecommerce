<?php

namespace Database\Factories;

use App\Models\Commande;
use App\Models\Livraison;
use App\Models\ModeLivraison;
use App\Models\ServiceLivraison;
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
            'mode_livraison_id' => fake()->randomElement(ModeLivraison::pluck("id")),
            'service_livraison_id' => fake()->randomElement(ServiceLivraison::pluck("id"))
        ];
    }
}
