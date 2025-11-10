<?php

namespace App\Controllers;
//estoy haciendo uso del archivo EmpleadosModel.php
use App\Models\EmpleadosModel;

class EmpleadosController extends BaseController
{
    #inicio del crud
    #mostrar empleados
    public function index(): string
    {
        $empleados = new EmpleadosModel();
        /*utilizar el método para seleccionar todos los datos de la tabla
        'datos' es el nombre del array*/
        $datos['datos'] = $empleados->findAll();
        //autores es una vista osea una página web a la que el 
        //usuario va a ingresar
        return view('empleados',$datos);
    }

    
}
