<!Doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editoriales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <h1>Editoriales</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar registro a la tabla Editoriales
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva editorial</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Colocamos comillas y comillas simples para evitar clavos-->
                    <form action="<?=base_url('agregar_editorial');?>" method="post">
                        <label for="txt_codigo" class="form-label">Código de Editorial:</label>
                        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                        <label for="txt_nombre" class="form-label">Nombre de Editorial:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                        <label for="txt_direccion" class="form-label">Dirección:</label>
                        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
                        <label for="txt_telefono" class="form-label">Teléfono:</label>
                        <input type="number" oninput="limitar(this)" name="txt_telefono" id="txt_telefono" class="form-control">
                        <label for="txt_email" class="form-label">Email:</label>
                        <input type="text" name="txt_email" id="txt_email" class="form-control">
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
                <th>Código de editorial</th>
                <th>Nombre de Editorial</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //recorrer todo el array (tabla) y cada fila
                //o registro le da el nombre de $autor
                foreach ($datos as $editorial) 
                {//inicio del ciclo
            ?>
            <tr>
                <td> <?=$editorial['codigo_editorial'];?> </td>
                <td> <?=$editorial['nombre'];?> </td>
                <td> <?=$editorial['direccion'];?> </td>
                <td> <?=$editorial['telefono'];?> </td>
                <td> <?=$editorial['email'];?> </td>
            </tr>
            <?php
                }//fin del ciclo
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

    <!--escript limitar caracteres input:number-->
    <script>
        function limitar(input){
            if(input.value.length>8)
            {
                input.value = input.value.slice(0, 8);
            }
        }
    </script>

</body>

</html>