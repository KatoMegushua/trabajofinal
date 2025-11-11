<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Registro a Bitácora
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 col-offset-4">
                <h1>Agregar bitacora</h1>
                <form action="<?=base_url('bitacora/guardar')?>" method="post">
                    
                <div class="mb-3">
            <label for="id_empleado" class="form-label">ID Empleado (Quién realizó la acción):</label>
            <input type="number" name="id_empleado" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="accion" class="form-label">Descripción de la Acción:</label>
            <textarea name="accion" class="form-control" rows="3" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-success mt-3">
            Guardar Registro
        </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>