<?php
require("Model/User.php");

class UserController {
  private $user;

  public function __construct() {
    $this->user = new User();
  }

  public function logout() {
    $this->user->logout();
    require("View/LoginView.php");
  }
  public function login() {
    if($this->user->existUser($_REQUEST["usuario"], $_REQUEST["contrasenia"]) || $this->user->existSession()) { 
      header("Location: ?c=Product&a=index");
    } 
    else { 
      $errorLogin = "<p>Contraseña o usuario incorrectos, verifique los datos y vuelva acceder</p>";
      require("View/LoginView.php");
    }
  }
  public function dataUser() {
    $data = $this->user->dataSession();
    require("View/DataUserView.php");
  }
}
?>
