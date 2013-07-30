<?php /* -*- mode: php; c-basic-offset: 2; indent-tabs-mode: nil -*- */
require '../inc/session.inc';
assertUser();

require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';


if( !$_POST['nombre'] )
  addError('Debe ingresar el nombre completo del usuario');

/*if( !$_POST['userdoc'] )
  addError('Debe ingresar el documento del usuario');*/

if( !$_POST['username'] )
  addError('Debe ingresar el username del usuario');

if( !$_POST['password'] )
  addError('Debe ingresar la contrase&ntilde;a inicial del usuario');

if( !$_POST['confirm-pw'] )
  addError('Debe ingresar la confirmaci&oacute;n de la contrase&ntilde;a del usuario');

if( strlen($_POST['password']) < 5 )
  addError('Debe ingresar una contrase&ntilde;a de al menos 5 caracteres');

if( $_POST['password'] != $_POST['confirm-pw'] )
  addError('No se pudo confirmar la contrase&ntilde;a');

$verify = verifyUserExist($_POST['username']);

if($verify){
    newUserInsert($_POST['username'], $_POST['nombre'],$_POST['password'],$_POST['active']);
}else{
    redirect("../user-insert.php");
}

//setSuccess('SQL_s: '.$sql.' state '.$rv);


?>
