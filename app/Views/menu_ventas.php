<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Ventas</title>
</head>
<body>
    <?php
        if (!session()->get('activa')) {
            echo "no tiene acceso";
        } else {   
    ?>
        <h1>Menu Ventas</h1>
   <?php
        }
   ?> 
</body>
</html>