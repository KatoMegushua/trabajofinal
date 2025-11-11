<?php

namespace App\Controllers;

use App\Models\ProveedoresModel;

class ProveedoresController extends BaseController {
// FUNCION DE MOSTRAR (INDEX) - Ahora con Búsqueda
public function index(): string {
    $modeloProveedor = new ProveedoresModel();
    
    // 1. Revisa si el usuario está buscando algo (desde la URL con "GET")
    $terminoBusqueda = $this->request->getGet('busqueda');
    
    // 2. Si hay un término de búsqueda, filtra los resultados
    if (!empty($terminoBusqueda)) {
        // Busca en los campos más relevantes: nombre de empresa o contacto
        $modeloProveedor
            ->like('nombre_empresa', $terminoBusqueda)
            ->orLike('contacto_nombre', $terminoBusqueda);
    }
    
    // 3. Obtiene los datos (ya sean todos, o los filtrados)
    $datos['proveedores'] = $modeloProveedor->findAll();
    
    // 4. Muestra la vista
    return view('proveedores_lista', $datos);
}
 
    }
    
    // 2. FUNCIÓN DE AGREGAR (Muestra el formulario)
    // Usada en la rama: feature/agregar-proveedor
    public function agregarProveedor() { 
        // Retorna la vista del formulario
        return view('form_agregar_proveedor');
    }

    // 3. FUNCIÓN DE GUARDAR (Recibe el POST del formulario e inserta)
    // Usada en la rama: feature/agregar-proveedor
    public function guardar() {
        $modeloProveedor = new ProveedoresModel(); 

        // Recibe los datos del formulario (POST)
        $datosAInsertar = [
            'nombre_empresa'  => $this->request->getPost('nombre_empresa'),
            'contacto_nombre' => $this->request->getPost('contacto_nombre'),
            'telefono'        => $this->request->getPost('telefono'),
            'correo'          => $this->request->getPost('correo'),
            'direccion'       => $this->request->getPost('direccion'),
        ];
        
        // Inserta el registro y redirige
        $modeloProveedor->insert($datosAInsertar);
        return $this->response->redirect(base_url('/proveedores')); 
    }
    
// FUNCIÓN 1: MUESTRA EL FORMULARIO DE MODIFICACIÓN (modificar($id))
public function modificar($id) {
    $modeloProveedor = new ProveedoresModel();
    
    // Busca el registro específico por su ID
    $datos['proveedor'] = $modeloProveedor->find($id);
    
    // Si no encuentra el proveedor, podría redirigir o mostrar un error.
    if (empty($datos['proveedor'])) {
        // Redirige a la lista si el ID no existe
        return $this->response->redirect(base_url('/proveedores')); 
    }

    // Muestra la vista del formulario, pasando los datos encontrados
    return view('form_modificar_proveedor', $datos);
}

// FUNCIÓN 2: RECIBE LOS DATOS DEL FORMULARIO Y ACTUALIZA (actualizar())
public function actualizar() {
    $modeloProveedor = new ProveedoresModel();
    
    // Recibe el ID oculto del formulario
    $id = $this->request->getPost('id_proveedor');
    
    // Prepara el array de datos
    $datosAActualizar = [
        'nombre_empresa'  => $this->request->getPost('nombre_empresa'),
        'contacto_nombre' => $this->request->getPost('contacto_nombre'),
        'telefono'        => $this->request->getPost('telefono'),
        'correo'          => $this->request->getPost('correo'),
        'direccion'       => $this->request->getPost('direccion'),
    ];
    
    // Ejecuta la actualización (Update) en la BD
    $modeloProveedor->update($id, $datosAActualizar);
    
    // Redirige a la lista principal
    return $this->response->redirect(base_url('/proveedores'));
}    
// FUNCIÓN PARA ELIMINAR UN REGISTRO
public function eliminar($id) {
    $modeloProveedor = new ProveedoresModel();
    
    // Ejecuta la eliminación (Delete) en la BD usando el ID
    $modeloProveedor->delete($id);
    
    // Redirige a la lista principal
    return $this->response->redirect(base_url('/proveedores'));
}
}