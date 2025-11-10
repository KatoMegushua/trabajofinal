<!Doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prestamos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <h1>Prestamos</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar registro a la tabla Prestamos
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo prestamo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Colocamos comillas y comillas simples para evitar clavos-->
                    <form action="<?=base_url('agregar_prestamo');?>" method="post">
                        <label for="txt_noprestamo" class="form-label">Numero de prestamo:</label>
                        <input type="number" name="txt_noprestamo" id="txt_noprestamo" class="form-control">
                        <label for="txt_codlibro" class="form-label">Codigo de libro:</label>
                        <input type="number" name="txt_codlibro" id="txt_codlibro" class="form-control">
                        <label for="txt_carne" class="form-label">Carné de alumno:</label>
                        <input type="number" name="txt_carne" id="txt_carne" class="form-control">
                        <label for="txt_fechaprestamo" class="form-label">Fecha de prestamo:</label>
                        <input type="date" name="txt_fechaprestamo" id="txt_fechaprestamo" class="form-control">
                        <label for="txt_fechadevolucion" class="form-label">Fecha de devolución:</label>
                        <input type="date" name="txt_fechadevolucion" id="txt_fechadevolucion" class="form-control">
                        <label for="txt_codempleado" class="form-label">Codigo de empleado:</label>
                        <input type="number" name="txt_codempleado" id="txt_codempleado" class="form-control">
                        <button type="submit" class="form-control btn btn-primary mt-2">Guardar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModaldos">
        Eliminar registro de la tabla autores
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModaldos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Colocamos comillas y comillas simples para evitar clavos-->
                    <form action="<?=base_url('eliminar_autor');?>" method="post">
                        <label for="txt_codigo" class="form-label">Código:</label>
                        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                        <button type="submit" class="form-control btn btn-primary mt-2">Eliminar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Numero de prestamo</th>
                <th>Código de libro</th>
                <th>Carné del alumno</th>
                <th>Fecha de préstamo</th>
                <th>Fecha de devolución</th>
                <th>Código de empleado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //recorrer todo el array (tabla) y cada fila
                //o registro le da el nombre de $autor
                foreach ($datos as $prestamo) 
                {//inicio del ciclo
            ?>
            <tr>
                <td> <?=$prestamo['numero_prestamo'];?> </td>
                <td> <?=$prestamo['codigo_libro'];?> </td>
                <td> <?=$prestamo['carne_alumno'];?> </td>
                <td> <?=$prestamo['fecha_prestamo'];?> </td>
                <td> <?=$prestamo['fecha_devolucion'];?> </td>
                <td> <?=$prestamo['codigo_empleado'];?> </td>
            </tr>
            <?php
                }//fin del ciclo
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>