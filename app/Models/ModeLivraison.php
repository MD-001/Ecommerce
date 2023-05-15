<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mode_livraison extends Model
{
    use HasFactory;
    protected $table = "modes_livraison";
    protected $fillable = [
                    "libelle",
                    "description"
                    ];
    protected $primaryKey = "id";
}
