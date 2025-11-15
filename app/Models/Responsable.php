<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'cargo',
        'telefono',
        'email',
        'numeroempleado',
        'estado',
        'foto',
    ];
}