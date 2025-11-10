<!Doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <h1>Libros</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar registro a la tabla Libros
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo libro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--Colocamos comillas y comillas simples para evitar clavos-->
                    <form action="<?=base_url('agregar_libro');?>" method="post">
                        <label for="txt_codlibro" class="form-label">Código de Libro:</label>
                        <input type="number" name="txt_codlibro" id="txt_codlibro" class="form-control">
                        <label for="txt_codautor" class="form-label">Código de Autor:</label>
                        <input type="number" name="txt_codautor" id="txt_codautor" class="form-control">
                        <label for="txt_codeditorial" class="form-label">Código de Editorial:</label>
                        <input type="number" name="txt_codeditorial" id="txt_codeditorial" class="form-control">
                        <label for="txt_titulo" class="form-label">Titulo de Libro:</label>
                        <input type="text" name="txt_titulo" id="txt_titulo" class="form-control">
                        <label for="txt_nopags" class="form-label">Numero de páginas:</label>
                        <input type="number" name="txt_nopags" id="txt_nopags" class="form-control">
                        <label for="txt_tama" class="form-label">Tamaño:</label>
                        <input type="text" name="txt_tama" id="txt_tama" class="form-control">
                        <label for="txt_precio" class="form-label">Precio:</label>
                        <input type="number" name="txt_precio" id="txt_precio" class="form-control">
                        <label for="txt_estado" class="form-label">Estado:</label>
                        <input type="number" name="txt_estado" id="txt_estado" class="form-control">
                        <label for="txt_edicion" class="form-label">Edición:</label>
                        <input type="number" name="txt_edicion" id="txt_edicion" class="form-control">
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
                <th>Código de Libro</th>
                <th>Código de Autor</th>
                <th>Código de Editorial</th>
                <th>Titulo de Libro</th>
                <th>Numero de páginas</th>
                <th>Tamaño</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Edición</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //recorrer todo el array (tabla) y cada fila
                //o registro le da el nombre de $autor
                foreach ($datos as $libro) 
                {//inicio del ciclo
            ?>
            <tr>
                <td> <?=$libro['codigo_libro'];?> </td>
                <td> <?=$libro['codigo_autor'];?> </td>
                <td> <?=$libro['codigo_editorial'];?> </td>
                <td> <?=$libro['titulo'];?> </td>
                <td> <?=$libro['numero_paginas'];?> </td>
                <td> <?=$libro['tamanio'];?> </td>
                <td> <?=$libro['precio'];?> </td>
                <td> <?=$libro['estado'];?> </td>
                <td> <?=$libro['edicion'];?> </td>
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