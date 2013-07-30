<?php /* -*- mode: php; c-basic-offset: 2; indent-tabs-mode: nil -*- */
require '../inc/session.inc';
assertUser();

require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';
//$db = conectaDB();

assertRole(ROLE_SYSTEM_USER);

$con = mysql_connect( DB_HOST, DB_USER, DB_PASSWORD );
mysql_select_db(DB_NAME, $con);

function getSQLUpdate() {
  $vuser=$user['data']['id'];
  $vuser_activate=$_POST['user-activate'];
  $vusername=$_POST['user-id'];

  $sql = "UPDATE sys_user SET active=$vuser_activate ";
  $sql .= " WHERE username='$vusername'";
  return $sql;
}

define('BACK_FRAME', '../users.php');
define('NEXT_FRAME', '../users.php');

//validate

if( !$_POST['user-id'] )
  addError('Error interno: Falta el identificador de la entidad');

if( !$_POST['user-activate'] )
  addError('Error interno: Falta el estado resultante');

if( hasErrors() ) {
  mysql_close($con);
  redirect(BACK_FRAME);
}

//insert

$user = getUser();
$sql = getSQLUpdate();
$rv = mysql_query($sql, $con);

if( !$rv ) {
  mysql_close($con);
  addErrorAndExit('Error interno. Fallo al intentar actualizar el usuario', BACK_FRAME);
}
mysql_close($con);


setSuccess('Actualizaci&oacute;n realizada exitosamente');
redirect(NEXT_FRAME);
?>