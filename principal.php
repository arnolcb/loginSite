<?php
    session_start();

    if(!isset($_SESSION['user'])){
        echo '
        <script>
            alert("Por favor debes iniciar sesión");
            window.location = "index.php";
        </script>
        ';
        session_destroy;
        die();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>
    Bienvenido paytableCalculator
   </title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>