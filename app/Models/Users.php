<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $fillable = [
        'MatriculeUser',
        'NomUser',
        'RoleUser',
        'GradeUser',
        'EmailUser',
        'PhotoUser',
        'Statut',
        'Token',
        'Token_Expire',
        'Password'
    ];
}
