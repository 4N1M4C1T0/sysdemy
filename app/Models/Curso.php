<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Curso extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nombre_curso',
        'biografia_curso',
        'imagen',
        'precio',
        'idusu',
    ];
}
