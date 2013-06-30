<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$uploaddir = '../../img/categories/';  
//exec("rm ../audio/introduction.*");

$file = $uploaddir.string2url(basename($_FILES['image_category']['name'])); 
echo("nombre: ".$file);

if($file != ""){
    if (move_uploaded_file($_FILES['image_category']['tmp_name'], $file)) { 
        //exec("chmod 777 -R ".$uploaddir);	
        echo "success"; 


    } else {
            echo "error al subir audio";
    }
}else{
    error_log("Imagen por default");
}
//exec("chmod 777 ../audio/*");
setSuccess("Guardado con exito");
redirect("../category.php");
?>
