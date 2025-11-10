<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>
</head>
<body>
    <?php
        if (!session()->get('activa')) {
            echo "no tiene acceso";
        } else {   
    ?>
        <h1>Menu Admin</h1>
        <h2>Bienvenido(a): <?=session()->get('nombre')?> </h2>    
        <a href="<?=base_url('cerrar_sesion')?>">Cerrar Sesión</a>
   <?php
        }
   ?> 
</body>
</html>