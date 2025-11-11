<?php

namespace App\Controllers;
//estoy haciendo uso del archivo AutoresModel.php
use App\Models\AutoresModel;

class BitacorasController extends BaseController
{
    public function index(): string{
    // 1. Inicializa el Modelo de Bitácora
        $modeloBitacora = new BitacorasModel(); // Asegúrate de que el nombre de la clase es BitacorasModel

        // 2. Obtener todos los datos y guardarlos en un array
        $datos['bitacoras'] = $modeloBitacora->findAll(); // Usamos 'bitacoras' como clave para el array

        // 3. Devolver la Vista
        // La vista debe ser un archivo que vas a crear en la carpeta 'Views', como 'bitacora_lista.php'
        return view('bitacora_lista', $datos);
    }
    }
    {
        $autores = new AutoresModel();
        /*utilizar el método para seleccionar todos los datos de la tabla
        'datos' es el nombre del array*/
        $datos['datos'] = $autores->findAll();
        //autores es una vista osea una página web a la que el 
        //usuario va a ingresar
        return view('autores',$datos);
    }
    public function agregarAutor()
    {
        $autores = new AutoresModel();

        $datos=[
            'codigo_autor'=>$this->request->getPost('txt_codigo'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'nacionalidad'=>$this->request->getPost('txt_nacionalidad')
        ];
        //ejecuta el método insert para agregar los datos en la tabla
        $autores->insert($datos);
        //ejecutamos el método index para recargar la tabla
        return $this->index();
    }

    public function eliminarAutor($id)
    {
        
        $autores = new AutoresModel();
        //ejecuta el método delete para eliminar los datos en la tabla
        $autores->delete($id);
        //ejecutamos el método index para recargar la tabla
        return $this->index();
    }
    
    public function buscarAutor($codigo)
    {
        //objeto que permite usar clase autoresmodel
        $autores = new AutoresModel();
        //array de datos
        //el first lo que hace es posicionarnos en el registro existente relacionado
        $datos['datos'] = $autores->where('codigo_autor',$codigo)->first();
        //enviamos los datos al formulario
        return view('form_editar_autor',$datos);
    }

    public function modificarAutor(){
        $autores = new AutoresModel();
        $datos=[
            'apellido'=>$this->request->getPost('txt_apellido'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'nacionalidad'=>$this->request->getPost('txt_nacionalidad')
        ];

        $codigo = $this->request->getPost('txt_codautor');
        $autores->update($codigo, $datos);
        return $this->index();

    }
}
