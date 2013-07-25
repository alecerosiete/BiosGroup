<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';


$banner_id = $_POST['banner_id'];
$active = $_POST['active'];

updateBannerElectromedicinaState($banner_id,$active);

?>