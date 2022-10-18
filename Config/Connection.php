<?php
class Connection {
  public static function getConnection(){
    try {
      /* $connection = pg_connect("host=localhost port=5432 dbname=bdproductos user=postgres password=postgres"); //--> conexión para base de datos postgres */ 
      $connection = new mysqli('localhost', 'root', '', 'bdproductos'); // --> conexión para base de datos en mysql
    } catch(Exception $e) {
      echo "Ocurrio un error al obtener la conexión ".$e->getMessage();
      $connection = null;
    }
    return $connection;
  }
}
?>
