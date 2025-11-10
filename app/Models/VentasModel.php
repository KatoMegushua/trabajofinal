<?php

namespace App\Models;

use CodeIgniter\Model;

class VentasModel extends Model
{
    protected $table         = 'ventas';
    protected $primaryKey = 'id_venta';
    protected $allowedFields = [
        'id_venta', 'fecha', 'id_empleado', 'total',
    ];
    #protected $returnType    = \App\Entities\User::class;
    #protected $useTimestamps = true;
}