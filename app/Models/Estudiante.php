<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = ['id_persona','id_acudiente','id_rol','genero','fecha_nacimiento','edad','nombre_padre','nombre_madre','estado'];
}

