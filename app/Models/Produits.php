<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    protected $fillable = [
        'CodeProduit',
        'NomProduit',
        'PrixUnitaire',
        'Devise',
        'Quantite',
        'Etat',
        'PhotoUn',
        'PhotoDeux',
        'PhotoTrois',
        'PhotoQuatre',
        'Categorie_Id'
    ];
}
