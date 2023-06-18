<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $fillable = [
                    "nom",
                    "image"
                    ];
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function Produits(){
        $this->hasMany(Produit::class);
    }
}

