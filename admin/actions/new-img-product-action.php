<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$uploaddir = '../resources/images/banner/'; 
//exec("rm ../audio/introduction.*");
$file = $uploaddir.string2url(basename($_FILES['product_img']['name'])); 
echo("nombre: ".$file);
if (move_uploaded_file($_FILES['product_img']['tmp_name'], $file)) { 
    exec("chmod 777 -R ".$uploaddir);	
    echo "success"; 
    
    
} else {
	echo "error al subir audio";
}
//exec("chmod 777 ../audio/*");

redirect("../product.php");
?>
