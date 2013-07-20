<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$uploaddir = '../resources/images/banner/'; 

$file = $uploaddir.string2url(basename($_FILES['banner']['name'])); 
exec("chmod 777 $file");
if (!move_uploaded_file($_FILES['banner']['tmp_name'], $file)) { 
   addError("Error al cargar el Banner, intentelo nuevamente");
   error_log("Error al cargar");
   exit(0);
} 

/* Guarda los datos en la BD*/
$titulo = $_POST["titulo-banner"];
$texto = $_POST["texto-banner"];
$table_banner = $_POST['banner-category'];
error_log("TABLA BANNER : ".$table_banner);
$nombre_imagen = string2url(basename($_FILES['banner']['name']));
print_r($_POST);
$db = conect();
$sql = "INSERT INTO $table_banner (banner_name,banner_title,banner_text,registered) VALUES ('$nombre_imagen','$titulo','$texto',now())";
$statement = $db->prepare($sql);
$statement->execute();

//print_r($rowInfo);
$db = null;
/* Fin */
    
setSuccess("Nuevo banner guardado con exito");
$url = "../banner-administrator.php";
redirect($url);
header('Location: '.$url);
?>