<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $table = "commandes";
    protected $fillable = [
                    "date",
                    "description",
                    "etat_commande_id",
                    "total",
                    "client_id"
                ];
    protected $primaryKey = "ref";
    public function user(){
        return $this->belongsTo(User::class, 'client_id');
    }
    public function etat_commande(){
        return $this->belongsTo(EtatCommande::class, 'etat_commande_id');
    }
}
