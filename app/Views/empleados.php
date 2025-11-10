<!Doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <h1>Empleados</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar registro a la tabla empleados
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo empleado</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Colocamos comillas y comillas simples para evitar clavos-->
                    <form action="<?=base_url('agregar_empleado');?>" method="post">
                        <label for="txt_codigo" class="form-label">Id empleado:</label>
                        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                        <label for="txt_nombre" class="form-label">Nombre:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                        <label for="txt_apellido" class="form-label">Apellido:</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">
                        <label for="txt_cargo" class="form-label">Cargo:</label>
                        <input type="text" name="txt_cargo" id="txt_cargo" class="form-control">
                        <label for="txt_usuario" class="form-label">Usuario:</label>
                        <input type="text" name="txt_usuario" id="txt_usuario" class="form-control">
                        <label for="txt_contra" class="form-label">Contraseña:</label>
                        <input type="text" name="txt_contra" id="txt_contra" class="form-control">
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
                <th>Id de empleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cargo</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //recorrer todo el array (tabla) y cada fila
                //o registro le da el nombre de $autor
                foreach ($datos as $empleados) 
                {//inicio del ciclo
            ?>
            <tr>
                <td> <?=$empleados['id_empleado'];?> </td>
                <td> <?=$empleados['nombre'];?> </td>
                <td> <?=$empleados['apellido'];?> </td>
                <td> <?=$empleados['cargo'];?> </td>
                <td> <?=$empleados['usuario'];?> </td>
                <td> <?=$empleados['contrasena'];?> </td>
                <td>
                    <a href="<?=base_url("eliminar_empleado/").$empleados['id_empleado'];?>" class="btn btn-danger" name="btn_eliminar"><i class="bi bi-trash3-fill"></i></a>
                    <a href="<?=base_url("buscar_empleado/").$empleados['id_empleado'];?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                </td>
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