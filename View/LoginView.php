<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio sesión</title>
</head>
<body>
  <center>
    <form action="?c=User&a=login" method="POST">
      <h4>Iniciar Sesión</h4>
      <?php if(isset($errorLogin)) echo $errorLogin; ?>
      <fieldset class="inicio-session">
        <legend>Inicio de sesión</legend>
        <label>Ingrese Usuario: </label>
        <input type="text" name="usuario">
        <label>Ingrese Contraseña: </label>
        <input type="password" name="contrasenia">
        <input class="iniciar-session" type="submit">
      </fieldset>
    </form>
  </center>
</body>
</html>
