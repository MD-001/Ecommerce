<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\EtatCommande;
use App\Models\Etat_commande;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
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
            "description" => fake()->text(),
            "etat_commande_id" => fake()->randomElement(EtatCommande::pluck("id")),
            "total" => fake()->randomFloat(2, 500, 10000),
            "client_id" => fake()->randomElement(User::pluck("id"))
        ];
    }
}
