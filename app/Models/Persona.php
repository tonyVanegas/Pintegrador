<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Persona extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $fillable = ['tipo_documento','numero_documento','nombres','primer_apellido','segundo_apellido'];

}