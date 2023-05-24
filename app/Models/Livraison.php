<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $table = "livraisons";
    protected $fillable = [
                    "date",
                    'commande_ref',
                    'mode_livraison_id'
                    ];
    protected $primaryKey = "id";
    public $timestamps = false;
}
