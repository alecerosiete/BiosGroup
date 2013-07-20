<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$uploaddir = '../../img/products/'; 
$file = $uploaddir.string2url(basename($_FILES['product_img']['name'])); 
if(string2url(basename($_FILES['product_img']['name'])) != ""){

    if (!move_uploaded_file($_FILES['product_img']['tmp_name'], $file)) { 
        error_log("Error al subir la imagen");
        addError("Error al cargar la imagen");
        redirect("../product.php");  
    }
    $img_name = string2url(basename($_FILES['product_img']['name']));
}else{
    $img_name = "default.png";
}
$title = $_POST['product-title'];
$product_category_id = $_POST['product-category'];
error_log("PRODUCT_CATEGORY: ".$product_category_id);
$table_product = $_POST['product-table'];
if($table_product == "product"){
    $table_category = "category";
    $product_category_name = getCategoryById($product_category_id);
}else{
    $table_category = "category_electromedicina";
    $product_category_name = getCategoryByIdElectromedicina($product_category_id);
}

$description = $_POST['product-description'];
$image_name =  $img_name; 
$active = $_POST['product-state'];

setSuccess("Guardado con exito");

saveNewProduct($title,$description,$image_name,$active,$product_category_id,$product_category_name['name'],$table_product);



redirect("../product.php");
