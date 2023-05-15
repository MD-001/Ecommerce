<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison_boutique extends Model
{
    use HasFactory;
    protected $table = "livraison_boutiques";
    protected $fillable = [
                    'livraison_id',
                    'boutique_id'
                    ];
    protected $primaryKey = "id";
}
