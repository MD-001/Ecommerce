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
}
