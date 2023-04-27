<?php

    session_start();

    include 'conexion_be.php';

    $mail = $_POST['email'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE mail='$mail' and password='$password'");
     
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['user'] = $mail;
        header("location: ../principal.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
?>