<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    use HasFactory;
    protected $table = "ligne_commandes";
    protected $fillable = [
                    "sous_total",
                    "qte_produit",
                    "commande_ref",
                    "produit_ref"
                    ];  
    protected $primaryKey = "id";
    public $timestamps = false;
}
