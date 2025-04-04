<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Rol extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'roles';

    protected $fillable = [
        'nombre_rol',
        'permisos',
    ];
}
