<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpleadosModel extends Model
{
    protected $table         = 'empleados';
    protected $primaryKey = 'id_empleado';
    protected $allowedFields = [
        'codigo_autor', 'nombre', 'apellido', 'cargo','usuario','contrasena',
    ];
    #protected $returnType    = \App\Entities\User::class;
    #protected $useTimestamps = true;
}