<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'NomUser',
        'Email',
        'Telephone',
        'RoleUser',
        'Statut',
        'Token',
        'Token_Expire',
        'Photo',
        'Password'
    ];
}