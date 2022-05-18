<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion_Estudiante extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = ['id_estudiante','id_curso','id_materias'];
}

