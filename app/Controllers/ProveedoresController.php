<?php

namespace App\Controllers;

use App\Models\ProveedoresModel;

class ProveedoresController extends BaseController {

    // 1. FUNCION DE MOSTRAR (INDEX)
    // Usada en la rama: feature/mostrar-proveedores
    public function index(): string {
        $modeloProveedor = new ProveedoresModel();
        
        // La funcionalidad de "Buscar" aún no está activa aquí,
        // pero la dejaremos preparada para la siguiente rama.
        $datos['proveedores'] = $modeloProveedor->findAll();
        
        // Retorna la vista de la lista de proveedores
        return view('proveedores_lista', $datos);
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
    
    // Las funciones de Modificar, Eliminar y Buscar se añadirán en sus propias ramas.
    
}