<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use App\Models\Ville;
use App\Models\Marque;
use App\Models\Facture;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Categorie;
use App\Models\Livraison;
use App\Models\Propriete;
use App\Models\Commentaire;
use App\Models\Fournisseur;
use App\Models\EtatCommande;
use App\Models\LigneCommande;
use App\Models\ModeLivraison;
use App\Models\ServiceLivraison;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['role' => 'Client']);
        Role::create(['role' => 'Admin']);

        Ville::insert([
            ["nom" => "Casablanca"],
            ["nom" => "Agadir"],
            ["nom" => "Fès"],
            ["nom" => "Marrakech"],
            ["nom" => "Meknès"],
            ["nom" => "Rabat"],
            ["nom" => "Tanger"],
            ["nom" => "Tétouan"],
            ["nom" => "Oujda"],
            ["nom" => "Al Hoceïma"],
            ["nom" => "Midelt"],
            ["nom" => "El Jadida"],
            ["nom" => "Larache"],
            ["nom" => "Guercif"],
            ["nom" => "Khénifra"],
            ["nom" => "Safi"],
            ["nom" => "Errachidia"],
            ["nom" => "Khouribga"],
            ["nom" => "Fkih Ben Salah"],
            ["nom" => "Settat"],
            ["nom" => "Martil"],
            ["nom" => "Ksar El]-Kébir"],
            ["nom" => "Fnideq"],
            ["nom" => "Sefrou"],
            ["nom" => "Guelmim"],
            ["nom" => "Ben Guerir"],
            ["nom" => "Kalaat Sraghna"],
            ["nom" => "Ouazzane"],
            ["nom" => "Sidi Slimane"],
            ["nom" => "Sidi Bennour"],
            ["nom" => "Sidi Kacem"],
            ["nom" => "Salé"],
            ["nom" => "Berkane"],
            ["nom" => "Béni Mellal"],
            ["nom" => "Taza"],
            ["nom" => "Oued Zem"],
            ["nom" => "Ould Teima"],
            ["nom" => "Kénitra"],
            ["nom" => "Taourirt"],
            ["nom" => "Nador"],
            ["nom" => "Mohammédia"],
            ["nom" => "Skhirat"],
            ["nom" => "Drarga"],
            ["nom" => "Témara"],
            ["nom" => "Aït Melloul"],
            ["nom" => "Âïn-Harrouda"],
            ["nom" => "Youssoufia"],
            ["nom" => "M'diq"],
            ["nom" => "Inezgane"],
            ["nom" => "Essaouira"],
        ]);

        User::factory(50)->create();
        Propriete::factory(50)->create();
        Fournisseur::factory(50)->create();
        Marque::factory(50)->create();
        
        Categorie::insert([
            ["nom" => "Vêtements et accessoires"], 
            ["nom" => "Chaussures"], 
            ["nom" => "Sacs et bagages"], 
            ["nom" => "Bijoux et montres"], 
            ["nom" => "Beauté et bien-être"], 
            ["nom" => "Maison et jardin"], 
            ["nom" => "Électronique"], 
            ["nom" => "Livres et médias"], 
            ["nom" => "Sports et loisirs"], 
            ["nom" => "Jouets et jeux"]
        ]);

        Produit::factory(50)->create();

        EtatCommande::insert([
            [
            'libelle' => 'En cours',
            'description' => 'Commande en cours'
            ],   
            [
            'libelle' => 'Délivrée',
            'description' => 'Commande délivrée'
            ],
            [
            'libelle' => 'Annulée',
            'description' => 'Commande annulée'
            ]
        ]);

        ModeLivraison::insert([
            ["libelle" => "Standard",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, aut."
            ], 
            ["libelle" => "Un-jour",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, aut."
            ], 
            ["libelle" => "Même-jour",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, aut."
            ], 
            ["libelle" => "Planifiée",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, aut."
            ], 
            ["libelle" => "Point de récupéreration",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, aut."
            ], 
        ]);

        Commande::factory(50)->create();

        $nomServicesLivraison = ['FedEx', 'Atlas Livraison', 'Express Coursier', 'COLISADE', 'ForLivraison', 'Mpacket', 'Cathedis', 'Send It', 'Oubratra Maroc', 'MagiCourses', 'Aqua Coursier'];

        foreach ($nomServicesLivraison as $nom) {
            ServiceLivraison::create([
                'nom' => $nom,
                'adresse' => fake()->address(),
                'tel' => fake()->phoneNumber(),
            ]);
        }

        Livraison::factory(50)->create();
        Facture::factory(50)->create();
        LigneCommande::factory(50)->create();
        Commentaire::factory(50)->create();
        
    }
}
