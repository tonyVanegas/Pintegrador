<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion_Estudiante extends Model
{
    use HasFactory;

    protected $table = "asignacion_estudiantes";
    public $timestamps = false; 
    protected $fillable = ['id_estudiante','id_curso','id_materias'];

    public function cursos(){
        return $this->belongsTo('App\Models\Curso','id_cursos');
    }

    public function materias(){
        return $this->belongsTo('App\Models\Materia','id_materias');
    }

    public function estudiantes(){
        return $this->belongsTo('App\Models\Estudiante','id_estudiante');
    }
}

