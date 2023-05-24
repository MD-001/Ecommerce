<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = "produits";
    protected $fillable = [
                    "designation",
                    "description",
                    'prix',
                    "image",
                    "qte_stock",
                    "tva",
                    "rating",
                    'propiete_id',
                    'marque_id',
                    'fournisseur_id',
                    'categorie_id'
                    ];
    protected $primaryKey = "ref";
}
