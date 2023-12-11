<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        'CodeFacture',
        'PrixTotal',
        'Devise',
        'QuantiteAchetee',
        'DateFacture',
        'Etat',
        'Fichier',
        'Users_Id',
        'Produits_Id'
    ];
}