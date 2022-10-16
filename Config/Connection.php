<?php
class Connection {
  public static function getConnection(){
    /* $connection = pg_connect("host=localhost port=5432 dbname=bdproductos user=postgres password=postgres"); //--> conexión para base de datos postgres */ 
    $connection = new mysqli('localhost', 'root', '', 'bdproductos'); // --> conexión para base de datos en mysql
    return $connection;
  }
}
?>
