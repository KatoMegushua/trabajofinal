<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 col-offset-4">
                <h1>Editar Empleado</h1>
                <form action="<?=base_url('modificar_empleado')?>" method="post">
                    <label for="txt_codempleado" class="form-label">Id empleado:</label><!--readoly es para hacer que el campo sea solo de lectura-->
                    <input type="number" class="form-control" id="txt_codempleado" name="txt_codempleado" value="<?=$datos['id_empleado'];?>" readonly>
                    <label for="txt_nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" value="<?=$datos['nombre'];?>">
                    <label for="txt_apellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" id="txt_apellido" name="txt_apellido" value="<?=$datos['apellido'];?>">
                    <label for="txt_cargo" class="form-label">Cargo:</label>
                    <input type="text" class="form-control" id="txt_cargo" name="txt_cargo" value="<?=$datos['cargo'];?>">
                    <label for="txt_usuario" class="form-label">Usuario:</label>
                    <input type="text" class="form-control" id="txt_usuario" name="txt_usuario" value="<?=$datos['usuario'];?>">
                    <label for="txt_contra" class="form-label">Cargo:</label>
                    <input type="text" class="form-control" id="txt_contra" name="txt_contra" value="<?=$datos['contrasena'];?>">
                    <button type="submit" class="form-control btn btn-primary mt-2">Modificar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>