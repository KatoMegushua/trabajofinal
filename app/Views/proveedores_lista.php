<h1>Listado de Proveedores</h1>

<table class="table table-striped" id="tablaProveedores">
    <thead>
        <tr>
            <th>ID</th>
            <th>Empresa</th>
            <th>Contacto</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Acciones</th> </tr>
    </thead>
    <tbody>
        <?php foreach ($proveedores as $proveedor): ?>
        <tr>
            <td><?= $proveedor['id_proveedor'] ?></td>
            <td><?= $proveedor['nombre_empresa'] ?></td>
            <td><?= $proveedor['contacto_nombre'] ?></td>
            <td><?= $proveedor['telefono'] ?></td>
            <td><?= $proveedor['correo'] ?></td>
            
            <td>
                <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>