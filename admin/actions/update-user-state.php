<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';


$id = $_POST['id'];
$active = $_POST['active'];

activateUserState($id,$active);

?>
