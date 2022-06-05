<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = ['id','nombre'];

    public function Asignacion_Docente(){
        return $this->hasMany('App/Models/Asignacion_Docente');
    }
    
    public function asignacion_estudiantes(){
        return $this->hasMany('App/Models/Asignacion_Estudiante');
    }
}
