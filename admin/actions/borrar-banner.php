<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$id = $_POST['id'];
$table_banner = $_POST['banner_table'];
$db = conect();
$sql = "DELETE FROM $table_banner WHERE id = $id";
error_log($sql);
$statement = $db->prepare($sql);
$statement->execute();
$db = null;
setSuccess("Banner borrado con èxito!");
exit();
?>