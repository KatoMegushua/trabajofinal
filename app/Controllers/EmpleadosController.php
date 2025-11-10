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

    #agregar empleados
   public function agregarEmpleado()
    {
        $empleados = new EmpleadosModel();

        $datos=[
            'id_empleado'=>$this->request->getPost('txt_codigo'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'cargo'=>$this->request->getPost('txt_cargo'),
            'usuario'=>$this->request->getPost('txt_usuario'),
            'contrasena'=>$this->request->getPost('txt_contra'),
        ];
        //ejecuta el método insert para agregar los datos en la tabla
        $empleados->insert($datos);
        //ejecutamos el método index para recargar la tabla
        return $this->index();
    }

   
 
}
