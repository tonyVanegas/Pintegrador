<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol'
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}