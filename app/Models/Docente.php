<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = ['id_persona','id_rol','direccion','celular','telefono_fijo','email','estado'];
}
