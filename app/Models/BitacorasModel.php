<?php

namespace App\Models;

use CodeIgniter\Model;

class BitacorasModel extends Model
{
    protected $table         = 'bitacora';
    protected $primaryKey = 'id_bitacora';
    protected $allowedFields = [
        'id_bitacora', 'id_empleado', 'fecha', 'accion',
    ];
    #protected $returnType    = \App\Entities\User::class;
    #protected $useTimestamps = true;
}