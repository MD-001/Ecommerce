<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatCommande extends Model
{
    use HasFactory;
    protected $table = "etats_commande";
    protected $fillable = [
                    "libelle",
                    "description"
                    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    public function Commandes(){
        return $this->hasMany(Commande::class, 'etat_commande_id');
    }
}
