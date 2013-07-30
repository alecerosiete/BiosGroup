<?php /* -*- mode: php; c-basic-offset: 2; indent-tabs-mode: nil -*- */
require '../inc/session.inc';
assertUser();

require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$isOk = true;
if( !$_POST['nombre'] ){
  addError('Debe ingresar el nombre completo del usuario');
  $isOK = false;
  
}
if( !$_POST['password'] ){
  addError('Debe ingresar la contrase&ntilde;a inicial del usuario');

  $isOK = false;
}

if( !$_POST['confirm-pw'] ){
  addError('Debe ingresar la confirmaci&oacute;n de la contrase&ntilde;a del usuario');

  $isOK = false;
}

if( strlen($_POST['password']) < 5 ){
  addError('Debe ingresar una contrase&ntilde;a de al menos 5 caracteres');

  $isOK = false;
}

if( $_POST['password'] != $_POST['confirm-pw'] ){
  addError('No se pudo confirmar la contrase&ntilde;a');
  $isOK = false;
  
}

if($isOk){
    userUpdate($_POST['username'], $_POST['nombre'],$_POST['password'],$_POST['active']);
}else{
    addError('No se pudo editar el usuario');
}

redirect("../user-insert.php");


//setSuccess('SQL_s: '.$sql.' state '.$rv);


?>