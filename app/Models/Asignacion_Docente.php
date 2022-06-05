<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignacion_docente extends Model
{
    use HasFactory;

    public $timestamps = false; 
    // protected $table = "asignacion_docentes";
     protected $fillable = ['id_docente','id_curso','id_materias'];
 
 
     public function cursos(){
        return $this->belongsTo('App\Models\Curso','id_curso');
     }
 
     public function materias(){
        return $this->belongsTo('App\Models\Materia','id_materias');
     }
 
     public function usuarios(){
        return $this->belongsTo('App\Models\Usuario','id_docente');
     }
    
}
