<h1>Listado de Bitácora de Actividades</h1>

<form action="<?= base_url('/bitacora') ?>" method="get" class="mb-3">
    <div class="input-group">
        <input type="text" name="busqueda" class="form-control" placeholder="Buscar por descripción de la acción...">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</form>

<table class="table table-striped" id="tablaBitacora">
    <thead>
        <tr>
            <th>ID</th>
            <th>Empleado (ID)</th>
            <th>Fecha</th>
            <th>Acción Realizada</th>
            <th>Acciones</th> 
        </tr>
    </thead>
    <tbody>
        <?php foreach ($bitacoras as $registro): ?>
        <tr>
            <td><?= $registro['id_bitacora'] ?></td>
            <td><?= $registro['id_empleado'] ?></td> 
            <td><?= $registro['fecha'] ?></td>
            <td><?= $registro['accion'] ?></td>
            
            <td>
                <a href="<?= base_url('/bitacora/modificar/' . $registro['id_bitacora']) ?>" class="btn btn-warning btn-sm">
                    Modificar
                </a>
                
                <a href="<?= base_url('/bitacora/eliminar/' . $registro['id_bitacora']) ?>" class="btn btn-danger btn-sm">
                    Eliminar
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>