<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Datos Usuario</title>
  </head>
  <body>
    <center>
      <ul class="info-usuario" >
        <h4>Información del usuario</h4>
        <?php
          echo '<li>Nombre: '.$data["nombre"].'</li>'; 
          echo '<li>Usuario: '.$data["usuario"].'</li>'; 
          echo '<li>Rol: '.$data["rol"].'</li>'; 
        ?>
      </ul>
      <form action="?c=Product&a=index">
        <button class="session-atras">Atras</button>
      </form>
    </center>
  </body>
</html>
