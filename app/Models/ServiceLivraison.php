<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLivraison extends Model
{
    use HasFactory;
    protected $table = "services_livraison";
    protected $fillable = [
                    "nom",       
                    "adresse",
                    "tel"
                    ];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
