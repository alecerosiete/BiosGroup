<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$uploaddir = '../../img/products/'; 
//exec("rm ../audio/introduction.*");
$file = $uploaddir.string2url(basename($_FILES['product_img']['name'])); 

if($file != ""){
    if (move_uploaded_file($_FILES['product_img']['tmp_name'], $file)) { 
        $id = $_POST['product-id'];
        $title = $_POST['product-title'];
        $product_category_id = $_POST['product-category'];
        $product_category_name = getCategoryById($product_category_id);
        $description = $_POST['product-description'];
        $image_name =  string2url(basename($_FILES['product_img']['name'])); 
        $active = $_POST['product-state'];
        setSuccess("Guardado con exito");

        updateProduct($title,$description,$image_name,$active,$product_category_id,$product_category_name['name'],$id);
        

    } else {
        error_log("Error al subir la imagen");
    }
//exec("chmod 777 ../audio/*");
}else{
    error_log("Imagen por default");
}

redirect("../product.php");