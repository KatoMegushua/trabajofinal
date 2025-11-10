<h1>Listado de Bitácora de Actividades</h1>

<table class="table table-striped" id="tablaBitacora">
    <thead>
        <tr>
            <th>ID</th>
            <th>Empleado</th>
            <th>Fecha</th>
            <th>Acción Realizada</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($bitacoras as $registro): ?>
        <tr>
            <td><?= $registro['id_bitacora'] ?></td>
            <td><?= $registro['id_empleado'] ?></td> 
            <td><?= $registro['fecha'] ?></td>
            <td><?= $registro['accion'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#tablaBitacora').DataTable();
    });
</script>