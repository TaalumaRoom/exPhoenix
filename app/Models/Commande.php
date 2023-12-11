<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'CodeCommande',
        'PrixTotal',
        'Devise',
        'QuantiteAchetee',
        'LieuLivraison',
        'DateCommande',
        'DateLivraison',
        'HeureLivraison',
        'Users_Id',
        'Produits_Id'
    ];
}
