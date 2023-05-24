<?php

namespace Database\Factories;

use App\Models\Produit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->randomElement(User::pluck("id")),
            'produit_ref' => fake()->randomElement(Produit::pluck("ref")),
            'contenu' => fake()->text()
        ];
    }
}
