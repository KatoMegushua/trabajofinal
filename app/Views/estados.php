<!Doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <h1>Estados</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar registro a la tabla Estados
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo estado</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Colocamos comillas y comillas simples para evitar clavos-->
                    <form action="<?=base_url('agregar_estado');?>" method="post">
                        <label for="txt_codigo" class="form-label">Código de estado:</label>
                        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                        <label for="txt_nombre" class="form-label">Estado:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
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
                <th>Código de estado</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //recorrer todo el array (tabla) y cada fila
                //o registro le da el nombre de $autor
                foreach ($datos as $estado) 
                {//inicio del ciclo
            ?>
            <tr>
                <td> <?=$estado['codigo_estado'];?> </td>
                <td> <?=$estado['nombre'];?> </td>
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