<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table         = 'usuarios';
    protected $primaryKey = 'usuario_id';
    protected $allowedFields = [
        'usuario_id', 'nombre', 'email', 'password', 'tipo_usuario_id',
    ];
    #protected $returnType    = \App\Entities\User::class;
    #protected $useTimestamps = true;
}