<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';
$a = explode(" ",microtime(false));
$uploaddir = '../../img/products/'; 
$file = $uploaddir.string2url(basename($a[1].$_FILES['product_img']['name'])); 
if(basename($_FILES['product_img']['name']) != ""){
  
    if (!move_uploaded_file($_FILES['product_img']['tmp_name'], $file)) { 
        error_log("Error al subir la imagen");
        addError("Error al cargar la imagen");
        redirect("../product_electromedicina.php");
    }
    $img_name = string2url(basename($a[1].$_FILES['product_img']['name']));
}else{
  if($_POST['product-img-default']==""){
     $img_name = "default.png";
  }else{
    $img_name = $_POST['product-img-default'];
  }
}
$id = $_POST['product-id'];
$title = $_POST['product-title'];
$product_category_id = $_POST['product-category'];
$product_category_name = getCategoryByIdElectromedicina($product_category_id);
$description = $_POST['product-description'];
$image_name =  $img_name;
$active = $_POST['product-state'];
setSuccess("Guardado con exito");

updateProductElectromedicina($title,$description,$image_name,$active,$product_category_id,$product_category_name['name'],$id);
        
redirect("../product_electromedicina.php");