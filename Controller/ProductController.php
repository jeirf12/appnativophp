<?php
require("Model/Product.php");

class ProductController {
  public function index() {
    session_start();
    if(!$_SESSION['nombre']) { header("Location: ?c=User&a=logout"); }

    $product = new Product();
    $products = $product->listProducts();
    require("View/ProductsView.php");
  }
}
?>
