<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $table = "fournisseurs";
    protected $fillable = [
                    "nom",
                    "email",
                    "tel",
                    "adresse"
                    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    public function produits(){
        $this->hasMany(Produit::class);
    }
}
