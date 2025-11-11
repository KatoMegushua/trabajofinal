<h1>Listado de Proveedores</h1>

<form action="<?= base_url('/proveedores') ?>" method="get" class="mb-3">
    <div class="input-group">
        <input type="text" name="busqueda" class="form-control" placeholder="Buscar por empresa o contacto...">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</form>
<table class="table table-striped" id="tablaProveedores">
    <thead>
        <tr>
            <th>ID</th>
            <th>Empresa</th>
            <th>Contacto</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Acciones</th> 
        </tr>
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
                <a href="<?= base_url('/proveedores/modificar/' . $proveedor['id_proveedor']) ?>" class="btn btn-warning btn-sm">
                    Modificar
                </a>
                <a href="<?= base_url('/proveedores/eliminar/' . $proveedor['id_proveedor']) ?>" class="btn btn-danger btn-sm">
                    Eliminar
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>