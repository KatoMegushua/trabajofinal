<?php

namespace App\Models;

use CodeIgniter\Model;

class ProveedoresModel extends Model
{
    protected $table         = 'proveedores';
    protected $primaryKey = 'id_proveedor';
    protected $allowedFields = [
        'id_proveedor', 'nombre_empresa', 'contacto_nombre', 'telefono', 'correo', 'direccion',
    ];
    #protected $returnType    = \App\Entities\User::class;
    #protected $useTimestamps = true;
}