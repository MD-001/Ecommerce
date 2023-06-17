<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = "produits";
    protected $with = ['categorie', 'fournisseur', 'propriete', 'marque', 'commentaire'];
    protected $fillable = [
                    "designation",
                    "description",
                    'prix',
                    "image",
                    "qte_stock",
                    "promotion",
                    "rating",
                    'propriete_id',
                    'marque_id',
                    'fournisseur_id',
                    'categorie_id',
                    'nom',
                    'image',
                    ];
    protected $primaryKey = "ref";
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }
    public function propriete()
    {
        return $this->belongsTo(Propriete::class);
    }
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }
    public function commentaire()
    {
        return $this->hasMany(Commentaire::class);
    }
}
