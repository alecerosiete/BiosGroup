<?php
require '../inc/session.inc';
assertUser();
require '../inc/conexion-functions.php';
require '../inc/sql-functions.php';

$uploaddir = '../../img/categories/';  

$file = $uploaddir.string2url(basename($_FILES['image_category']['name'])); 

if(basename($_FILES['image_category']['name']) != ""){
    if (!move_uploaded_file($_FILES['image_category']['tmp_name'], $file)) { 
        error_log("Error al subir imagen");
        addError("Error al subir la imagen");
        redirect("../category.php");
    }
    $cat_name = string2url(basename($_FILES['image_category']['name']));
}else{
    error_log("Imagen por default");
    $cat_name = "default.png";
}
$category_id = $_POST['category-id'];
$name = $_POST['category-name'];
$title = $_POST['category-title'];
$description = $_POST['category-description'];
$image_name = $cat_name;
$active = $_POST['category-state'];

updateCategory($name,$title,$description,$image_name,$active,$category_id);
setSuccess("Guardado con exito");
redirect("../category.php");