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

    #agregar ventas
    public function agregarVenta()
    {
        $ventas = new VentasModel();

        $datos=[
            'id_venta'=>$this->request->getPost('txt_codigo'),
            'fecha'=>$this->request->getPost('txt_fecha'),
            'id_empleado'=>$this->request->getPost('txt_idempleado'),
            'total'=>$this->request->getPost('txt_total')
        ];
        //ejecuta el método insert para agregar los datos en la tabla
        $ventas->insert($datos);
        //ejecutamos el método index para recargar la tabla
        return $this->index();
    }

    #eliminar venta
    public function eliminarVenta($id)
    {
        $ventas = new VentasModel();
        //ejecuta el método delete para eliminar los datos en la tabla
        $ventas->delete($id);
        //ejecutamos el método index para recargar la tabla
        return $this->index();
    }

    #buscar venta
    public function buscarVenta($codigo)
    {
        //objeto que permite usar clase ventasmodel
        $ventas = new VentasModel();
        //array de datos
        //el first lo que hace es posicionarnos en el registro existente relacionado
        $datos['datos'] = $ventas->where('id_venta',$codigo)->first();
        //enviamos los datos al formulario
        return view('form_editar_venta',$datos);
    }
   
}
