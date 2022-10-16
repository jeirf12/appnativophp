<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
  </head>
  <body>
    <center>
      <h4>Listado de Productos</h4>
      <table class="content-table">
        <thead>
          <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Precio</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($products as $item) {
              echo '<tr>'; 
              echo '<td>'.$item["codigo"].'</td>'; 
              echo '<td>'.$item["nombre"].'</td>'; 
              echo '<td>'.$item["precio"].'</td>'; 
              echo '</tr>'; 
            }
          ?>
        </tbody>
      </table>
      <form action="?c=User&a=logout" method="POST">
        <button class="cierre-session" type="submit">Cerrar Sesión</button>
      </form>
      <form action="?c=User&a=dataUser" method="POST">
        <button class="info-session" type="submit">Info Sesión</button>
      </form>
    </center>
  </body>
</html>
