<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat_commande extends Model
{
    use HasFactory;
    protected $table = "etats_commande";
    protected $fillable = [
                    "libelle",
                    "description"
                    ];
    protected $primaryKey = "id";
}
