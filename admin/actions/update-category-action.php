<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$category_id = $_POST['category_id'];
$name = $_POST['name'];
$title = $_POST['title'];
$description = $_POST['description'];
$image_name = string2url($_POST['image_name']);
$active = $_POST['active'];

updateCategory($name,$title,$description,$image_name,$active,$category_id);

?>
