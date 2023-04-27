<?php
  session_start();

  if(isset($_SESSION['user'])){
    header('Location: principal.php');
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - paytableCalculator</title>
    <link rel="stylesheet" href="assets/css/styles.css" />
  </head>
  <body>

    <header>
      <div>Método francés</div>
      <nav>
        <a href="#" class="button active">Home</a>
        <a href="#" class="button">Us</a>
        <a href="#" class="button">Contact Us</a>
      </nav>
    </header>

    <main>
      <div class="contenedor_todo">
        <div class="caja_trasera">
          <div class="caja_trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar en la página</p>
            <button id="btn_iniciar-sesion">Iniciar Sesión</button>
          </div>

          <div class="caja_trasera-register">
            <h3>¿Aún no tienes una cuenta?</h3>
            <p>Regístrate para entrar en la página</p>
            <button id="btn_registrarse">Registrarse</button>
          </div>
        </div>

        <div class="contenedor_login-register">
          <!--Formulario LOGIN-->
          <form action="php/login_usuario_be.php" method="POST" class="formulario_login">
            <h2>Welcome, Let's Get Started</h2>
            <input type="text" placeholder="Correo electrónico" name="email"/>
            <input type="password" placeholder="Contraseña" name="password"/>
            <button>Entrar</button>
          </form>

          <!--Formulario REGISTER-->
          <form action="php/registro_usuario_be.php" method="POST" class="formulario_register">
            <h2>Registrarse</h2>
            <input type="text" placeholder="Nombre Completo" name="fullname"/>
            <input type="text" placeholder="Usuario" name="user"/>
            <input type="text" placeholder="Correo electrónico" name="mail" />
            <input type="password" placeholder="Contraseña" name="password"/>
            <button>Registrarse</button>
          </form>
        </div>
      </div>
    </main>

    <footer>
      <div>Método francés</div>
      <div>
        <a href="#" class="social"><img src="twitter.png"></a>
        <a href="#" class="social"><img src="facebook.png"></a>
        <a href="#" class="social"><img src="instagram.png"></a>
        <a href="#" class="social"><img src="linkedin.png"></a>
      </div>
      <div class="rights">&copy; SV81 - Grupo 2, 2023.</div>
    </footer>

    <script src="assets/js/script.js"></script>
  </body>
</html>
