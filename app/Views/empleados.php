<!Doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <h1>Empleados</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //recorrer todo el array (tabla) y cada fila
                //o registro le da el nombre de $autor
                foreach ($datos as $empleado) 
                {
            ?>
                    <tr>
                        <td>   <?=$empleado['codigo_empleado'];?>   </td>
                        <td>   <?=$empleado['nombre'];?>       </td>
                        <td>   <?=$empleado['apellido'];?>         </td>
                        <td>   <?=$empleado['direccion'];?>   </td>
                        <td>   <?=$empleado['email'];?>  </td>
                    </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>