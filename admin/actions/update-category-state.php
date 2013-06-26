<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';


$category_id = $_POST['category_id'];
$active = $_POST['active'];

updateCategoryState($category_id,$active);

?>