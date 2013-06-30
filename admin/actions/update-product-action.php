<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$id  = $_POST['product_id'];
$title = $_POST['title'];
$product_category_id = $_POST['product_category_id'];
$product_category_name = $_POST['product_category_name'];
$description = $_POST['description'];
$image_name =  string2url($_POST['image_name']);
$active = $_POST['active'];

updateProduct($title,$description,$image_name,$active,$product_category_id,$product_category_name,$id);

?>
