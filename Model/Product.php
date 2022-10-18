<?php
class Product {
  private $connection;

  public function __construct(){
    $this->connection = Connection::getConnection();
  }

  public function listProducts(){
    $listProduct = array();
    try {
      $sql = "SELECT * FROM PRODUCTO";
      /* $query = pg_query($sql); // --> consulta con postgres */
      $query = $this->connection->query($sql); // --> consulta con mysql
      $index = 0;
      /* while($element = pg_fetch_assoc($query)){ // --> fetch_assoc de postgres */
      while($element = $query->fetch_assoc()){ // --> fetch_assoc de mysql
          $listProduct[$index++] = $element;
      }
    } catch (Exception $e) {
      echo "Error al obtener la lista de productos ".$e->getMessage();
    }
    return $listProduct;
  }
}
?>
