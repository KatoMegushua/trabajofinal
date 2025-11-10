<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 col-offset-4">
                <h1>Editar Venta</h1>
                <form action="<?=base_url('modificar_venta')?>" method="post">
                    <label for="txt_codventa" class="form-label">Id venta:</label><!--readoly es para hacer que el campo sea solo de lectura-->
                    <input type="number" class="form-control" id="txt_codventa" name="txt_codventa" value="<?=$datos['id_venta'];?>" readonly>
                    <label for="txt_fecha" class="form-label">Fecha:</label>
                    <input type="date" class="form-control" id="txt_fecha" name="txt_fecha" value="<?=$datos['fecha'];?>">
                    <label for="txt_idempleado" class="form-label">Id empleado:</label>
                    <input type="number" class="form-control" id="txt_idempleado" name="txt_idempleado" value="<?=$datos['id_empleado'];?>">
                    <label for="txt_total" class="form-label">Total:</label>
                    <input type="number" class="form-control" id="txt_total" name="txt_total" value="<?=$datos['total'];?>">
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