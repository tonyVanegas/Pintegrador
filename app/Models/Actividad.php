<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = ['id_docente','id_curso','contenido'];
}
