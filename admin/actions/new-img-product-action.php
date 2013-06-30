<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$uploaddir = '../../img/products/'; 
//exec("rm ../audio/introduction.*");
$file = $uploaddir.string2url(basename($_FILES['product_img']['name'])); 
echo("nombre: ".$file);
if($file != ""){
    if (move_uploaded_file($_FILES['product_img']['tmp_name'], $file)) { 
        //exec("chmod 777 -R ".$uploaddir);	
        echo "success"; 


    } else {
            echo "error al subir audio";
    }
//exec("chmod 777 ../audio/*");
}else{
    error_log("Imagen por default");
}
setSuccess("Guardado con exito");
redirect("../product.php");
