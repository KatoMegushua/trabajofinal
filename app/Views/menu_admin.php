<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>
</head>
<body class="d-flex flex-column align-items-center justify-content-center vh-100 bg-light">
    <?php
        if (!session()->get('activa')) {
            echo "no tiene acceso";
        } else {   
    ?>
        <h1>Menu Admin</h1>
        <h2>Bienvenido(a): <?=session()->get('nombre')?> </h2>
        <div class="mb-3">
            <a  href="<?=base_url('empleados')?>" type="button" class="btn btn-primary btn-lg">Gestión de empleados</a>
        </div>

        <div class="mb-3">
            <a href="<?=base_url('ventas')?>" type="button" class="btn btn-success btn-lg">Gestión de ventas</a>
        </div>

        <div class="mt-4">
            <a href="<?=base_url('cerrar_sesion')?>" type="button" class="btn btn-outline-danger">Cerrar sesión</a>
        </div>    
   <?php
        }
   ?> 
</body>
</html>