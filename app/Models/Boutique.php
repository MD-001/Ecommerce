<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;
    protected $table = "boutiques";
    protected $fillable = [
                    "adresse",
                    "tel",
                    "commande"
                    ];
    protected $primaryKey = 'id';
}
