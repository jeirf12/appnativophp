<?php
class User {
  private $connection;

  public function __construct(){
    $this->connection = Connection::getConnection();
    session_start();
  }

  public function existUser($username, $password) {
    $result = false;
    try {
      $sql = "SELECT * FROM PERSONA WHERE USUARIO = '$username' AND CLAVE = '$password' ";
      /* $query = pg_query($sql); // --> consulta con postgres */
      $query = $this->connection->query($sql); // --> consulta con mysql
      /* while ($element = pg_fetch_assoc($query)){ // --> fetch_assoc de postgres */
      while ($element = $query->fetch_assoc()){ // --> fetch_assoc de mysql
        $element['clave'] = password_hash($element['clave'], PASSWORD_DEFAULT);
        if(password_verify($password, $element['clave'])) {
          $this->fixedSession($element);
          $result = true;
        }
      }
    } catch( Exception $ex ) {
      echo "Ocurrio un error ".$ex;
    }
    return $result;
  }

  public function fixedSession($usuario) {
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['usuario'] = $usuario['usuario'];
    $_SESSION['clave'] = $usuario['clave'];
    $_SESSION['rol'] = $usuario['rol'];
  }

  public function getUsername(){
    return $_SESSION['usuario'];
  }

  public function existSession(){
    return isset($_SESSION['usuario']);
  }

  public function dataSession() {
    return $_SESSION;
  }

  public function logout() {
    session_unset();
    session_destroy();
  }
}
?>
