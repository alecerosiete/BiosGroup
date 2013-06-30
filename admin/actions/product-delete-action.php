<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$id = $_POST['product_id'];

$db = conect();
$sql = "DELETE FROM product WHERE id = ?;";
error_log($sql);
$statement = $db->prepare($sql);
$statement->execute(array($id));
$db = null;
exit();
?>