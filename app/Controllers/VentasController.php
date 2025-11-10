<?php

namespace App\Controllers;
//estoy haciendo uso del archivo VentasModel.php
use App\Models\VentasModel;

class VentasController extends BaseController
{
    #inicio CRUD ventas
    #mostrar venta
    public function index(): string
    {
        $ventas = new VentasModel();
        /*utilizar el método para seleccionar todos los datos de la tabla
        'datos' es el nombre del array*/
        $datos['datos'] = $ventas->findAll();
        //ventas es una vista osea una página web a la que el 
        //usuario va a ingresar
        return view('ventas',$datos);
    }
   
}
