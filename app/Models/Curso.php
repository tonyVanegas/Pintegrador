<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['grado','anio_lectivo','consecutivo','estado'];
    
    public function asignacion_docentes(){
      return $this->hasMany('App/Models/asignacion_docente');
    }

    public function asignacion_estudiantes(){
        return $this->hasMany('App/Models/Asignacion_Estudiante');
    }
}
