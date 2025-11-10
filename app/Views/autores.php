<!Doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <h1>Autores</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar registro a la tabla autores
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo autor</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Colocamos comillas y comillas simples para evitar clavos-->
                    <form action="<?=base_url('agregar_autor');?>" method="post">
                        <label for="txt_codigo" class="form-label">Código:</label>
                        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                        <label for="txt_apellido" class="form-label">Apellido:</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">
                        <label for="txt_nombre" class="form-label">Nombre:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                        <label for="txt_nacionalidad" class="form-label">Nacionalidad:</label>
                        <input type="text" name="txt_nacionalidad" id="txt_nacionalidad" class="form-control">
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
                <th>Código</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //recorrer todo el array (tabla) y cada fila
                //o registro le da el nombre de $autor
                foreach ($datos as $autor) 
                {//inicio del ciclo
            ?>
            <tr>
                <td> <?=$autor['codigo_autor'];?> </td>
                <td> <?=$autor['apellido'];?> </td>
                <td> <?=$autor['nombre'];?> </td>
                <td> <?=$autor['nacionalidad'];?> </td>
                <td>
                    <a href="<?=base_url("eliminar_autor/").$autor['codigo_autor'];?>" class="btn btn-danger" name="btn_eliminar"><i class="bi bi-trash3-fill"></i></a>
                    <a href="<?=base_url("buscar_autor/").$autor['codigo_autor'];?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
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