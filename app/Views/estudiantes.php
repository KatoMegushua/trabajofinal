<!Doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <h1>Estudiantes</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar registro a la tabla Estudiantes
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Estudiante</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Colocamos comillas y comillas simples para evitar clavos-->
                    <form action="<?=base_url('agregar_estudiante');?>" method="post">
                        <label for="txt_carne" class="form-label">Cané de alumno:</label>
                        <input type="number" name="txt_carne" id="txt_carne" class="form-control">
                        <label for="txt_nombre" class="form-label">Nombre:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                        <label for="txt_apellido" class="form-label">Apellido:</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">
                        <label for="txt_direccion" class="form-label">Dirección:</label>
                        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
                        <label for="txt_telefono" class="form-label">Teléfono:</label>
                        <input type="number" name="txt_telefono" id="txt_telefono" class="form-control">
                        <label for="txt_email" class="form-label">Email:</label>
                        <input type="email" name="txt_email" id="txt_email" class="form-control">
                        <label for="txt_fechanac" class="form-label">Fecha de nacimiento:</label>
                        <input type="date" name="txt_fechanac" id="txt_fechanac" class="form-control">
                        <label for="txt_codgrado" class="form-label">Código de grado:</label>
                        <input type="number" name="txt_codgrado" id="txt_codgrado" class="form-control">
                        <button type="submit" class="form-control btn btn-primary mt-2">Guardar</button>
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
                <th>Cané de alumno</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Fecha de nacimiento</th>
                <th>Código de grado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //recorrer todo el array (tabla) y cada fila
                //o registro le da el nombre de $autor
                foreach ($datos as $estudiante) 
                {//inicio del ciclo
            ?>
            <tr>
                <td> <?=$estudiante['carne_alumno'];?> </td>
                <td> <?=$estudiante['nombre'];?> </td>
                <td> <?=$estudiante['apellido'];?> </td>
                <td> <?=$estudiante['direccion'];?> </td>
                <td> <?=$estudiante['telefono'];?> </td>
                <td> <?=$estudiante['email'];?> </td>
                <td> <?=$estudiante['fechanacimiento'];?> </td>
                <td> <?=$estudiante['codigo_grado'];?> </td>
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