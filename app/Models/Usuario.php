<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    use HasFactory;

    protected $table = "users";
    public $timestamps = false; 
    protected $fillable = ['nombre','email','password'];

    public function asignacion_docente(){
        return $this->hasMany('App/Models/Asignacion_Docente');
    }
}
