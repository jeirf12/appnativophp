<?php
echo "<link rel='stylesheet' type='text/css' href='View/css/styles.css'>";
require('Config/Connection.php');
require('Config/Utilities.php');

$controller =  isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Product';
$action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';

$controller = Utilities::loadController($controller);
Utilities::loadAction($controller, $action);
?>
