<?php
class Utilities {
  public static function loadController($controller) {
    $nameController = $controller."Controller";
    $fileController = "Controller/".$nameController.".php";
    require_once $fileController;
    return new $nameController();
  }

  public static function loadAction($controller, $action) {
    if ($controller == null || !method_exists($controller, $action)) echo "no existe la pagina";
    else call_user_func(array($controller, $action));
  }
}
?>
