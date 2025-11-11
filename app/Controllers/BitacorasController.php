<?php

namespace App\Controllers;
//estoy haciendo uso del archivo AutoresModel.php
use App\Models\AutoresModel;

class AutoresController extends BaseController
{
public function index(): string {
    $modeloBitacora = new BitacorasModel();
    
    // 1. Revisa si el usuario está buscando algo (desde la URL con "GET")
    $terminoBusqueda = $this->request->getGet('busqueda');
    
    // 2. Si hay un término de búsqueda, filtra los resultados
    // Usamos el campo 'accion' de la tabla 'bitacora'
    if (!empty($terminoBusqueda)) {
        $modeloBitacora->like('accion', $terminoBusqueda);
    }
    
    // 3. Obtiene los datos (ya sea todos, o los filtrados)
    $datos['bitacoras'] = $modeloBitacora->findAll();
    
    // 4. Muestra la vista
    return view('bitacora_lista', $datos);
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

    // 1. FUNCIÓN PARA MOSTRAR EL FORMULARIO
public function agregarBitacora() { 
    // Esto carga la vista que creaste.
    return view('form_agregar_bitacora');
}

// 2. FUNCIÓN PARA RECIBIR Y GUARDAR LOS DATOS
public function guardar() {
    $modeloBitacora = new BitacorasModel(); // Inicializa el modelo

    // Recibe los datos del formulario por el método POST
    $datosAInsertar = [
        'id_empleado' => $this->request->getPost('id_empleado'),
        'accion'      => $this->request->getPost('accion'),
        // La 'fecha' se debe generar automáticamente en la base de datos (CURRENT_TIMESTAMP)
    ];
    
    // Inserta los datos en la base de datos
    $modeloBitacora->insert($datosAInsertar);
    
    // Redirige al usuario a la lista de bitácoras (la que hiciste en la rama anterior)
    return $this->response->redirect(base_url('/bitacora')); 
}
}
