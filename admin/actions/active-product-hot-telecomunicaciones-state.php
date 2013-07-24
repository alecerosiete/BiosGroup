<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';


$product_id = $_POST['product_id'];
$active = $_POST['active'];

updateProductTelecomunicacionesHotState($product_id,$active);

?>