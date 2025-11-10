<?php

namespace App\Controllers;
//estoy haciendo uso del archivo AutoresModel.php
use App\Models\AutoresModel;

class AutoresController extends BaseController
{
    public function index(): string
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
