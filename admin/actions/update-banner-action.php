<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';
$titulo = $_POST["titulo-banner"];
$texto = $_POST["texto-banner"];
$table_banner = $_POST['banner-category'];
$banner_id = $_POST['banner-id'];
error_log("TABLA BANNER : ".$table_banner);

$uploaddir = '../resources/images/banner/'; 

$file = $uploaddir.string2url(basename($_FILES['banner']['name'])); 
if(string2url(basename($_FILES['banner']['name'])) != ""){
    exec("chmod 777 $file");
    if (!move_uploaded_file($_FILES['banner']['tmp_name'], $file)) { 
       addError("Error al cargar el Banner, intentelo nuevamente");
       error_log("Error al cargar");
       exit(0);
    } 
    $nombre_imagen = string2url(basename($_FILES['banner']['name']));
    $sql = "UPDATE $table_banner SET banner_name = '$nombre_imagen',banner_title = '$titulo',banner_text = '$texto',registered = now(),active = 1 WHERE id = $banner_id";
    error_log("Modificar banner ".$sql);
    
}else{
    $sql = "UPDATE $table_banner SET banner_title = '$titulo',banner_text = '$texto',registered = now(),active = 1 WHERE id = $banner_id";

    error_log("Modificar banner ".$sql);
}
/* Guarda los datos en la BD*/
$db = conect();
$statement = $db->prepare($sql);
$statement->execute();

//print_r($rowInfo);
$db = null;
/* Fin */
    
setSuccess("Nuevo banner guardado con exito");
$url = "../banner-administrator.php#nuevo-banner";
redirect($url);
header('Location: '.$url);
?>