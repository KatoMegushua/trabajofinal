<?php

namespace App\Models;

use App\Models\ProveedoresModel;

class ProveedoresController extends BaseController {

    public function index(): string {
        $modeloProveedor = new ProveedoresModel();
        
        // 1. Obtiene todos los registros de proveedores
        $datos['proveedores'] = $modeloProveedor->findAll();
        
        // 2. Muestra la vista (que crearemos en el siguiente paso)
        return view('proveedores_lista', $datos);
    }
    
    // ... (deja las otras funciones vacías por ahora)
}