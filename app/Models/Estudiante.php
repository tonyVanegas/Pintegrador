<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = "estudiantes";
    public $timestamps = false; 
    protected $fillable = ['id_persona','id_acudiente','id_rol','genero','fecha_nacimiento','edad','nombre_padre','nombre_madre','estado'];

    public function asignacion_estudiantes(){
        return $this->hasMany('App/Models/Asignacion_Estudiante');
    }
    
}

