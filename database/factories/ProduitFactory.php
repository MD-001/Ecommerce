<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Fournisseur;
use App\Models\Marque;
use App\Models\Propriete;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'designation' => fake()->sentence(2),
            'description' => fake()->text(),
            'prix' => fake()->randomFloat(2,200, 10000),
            'image' => fake()->imageUrl(),
            'qte_stock' => fake()->numberBetween(50,300),
            'tva' => fake()->numberBetween(5,20),
            'rating' => fake()->numberBetween(1,5),
            'propiete_id' => fake()->randomElement(Propriete::pluck('id')),
            'marque_id' => fake()->randomElement(Marque::pluck('id')),
            'fournisseur_id' => fake()->randomElement(Fournisseur::pluck('id')),
            'categorie_id' => fake()->randomElement(Categorie::pluck('id'))
        ];
    }
}
