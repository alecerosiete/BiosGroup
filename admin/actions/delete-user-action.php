<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$id = $_GET['id'];
$db = conect();
$sql = "DELETE FROM sys_user WHERE id = $id";
error_log($sql);
$statement = $db->prepare($sql);
$statement->execute();
$db = null;
setSuccess("Banner borrado con èxito!");
redirect("../users.php");
?>