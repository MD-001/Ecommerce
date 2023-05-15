<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne_commande extends Model
{
    use HasFactory;
    protected $table = "ligne_commandes";
    protected $fillable = [
                    "sous_total",
                    "qte_produit",
                    "commande_id",
                    "produit_id"
                    ];  
    protected $primaryKey = "id";
}
