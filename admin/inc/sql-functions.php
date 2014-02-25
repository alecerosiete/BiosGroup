<?php
    
function consultaPerfil($ci){
    $db = conect();
    $sql = "SELECT *, u.ci as ci FROM sys_user AS u, sys_group AS g WHERE  u.tipo_de_usuario = g.nombre_de_grupo AND u.ci = '$ci'";
    $statement = $db->prepare($sql);
        
    
    /*Ejecutamos la consulta con los parametros*/
    $statement->execute();

    if( $item = $statement->fetch(PDO::FETCH_ASSOC) ) {
        $p = array('PERFIL' => $item);

        $db = null;
        
      } else {
        $p = null;
        $db = null;
        

      }
      return $p['PERFIL'];
}

function getUsers(){
    $db = conect();
    $sql = "SELECT * FROM sys_user ";
    $statement = $db->prepare($sql);
    $statement->execute();
    $users = $statement->fetchAll();
    return $users;
    $db = null;
}

function getUserById($id){
    $db = conect();
    $sql = "SELECT * FROM sys_user WHERE id = $id";
    $statement = $db->prepare($sql);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
    $db = null;
}


function getUserInfo(){

}



function activateUserState($id,$active){
    $db = conect();
    $sql = "UPDATE sys_user SET active = ";
    $sql .= $active;
    $sql .= " WHERE id = '$id'";
    $statement = $db->prepare($sql);
    $statement->execute();
       
    $db = null;
        
}

function verifyUserExist($username){
    $db = conect();
    $sql = sprintf("SELECT count(*) AS size FROM sys_user WHERE username='%s'",
        mysql_real_escape_string($username));

    $statement = $db->prepare($sql);
    $statement->execute();
    $item = $statement->fetch(PDO::FETCH_ASSOC);
    $db = null;
  if( $item['size'] > 0 ) {
    addError('El usuario ya se encuentra registrado');
    return false;
  }else{
      return true;
  }
}

function userUpdate(){
    $db = conect();
          $sql_user = "UPDATE sys_user SET nombre = '%s',password = md5('%s'),";
          $sql_user .= "active = %s,perfil_de_usuario = 'Administrador',fecha_registro = now() ";
          $sql_user .= " WHERE username = '%s'";
          $sql_user = sprintf($sql_user,          
          mysql_real_escape_string($_POST['nombre']),
          mysql_real_escape_string($_POST['password']),
          mysql_real_escape_string($_POST['active']),
          mysql_real_escape_string($_POST['username']));
          $statement = $db->prepare($sql_user);
          if($statement->execute()){
              setSuccess("Modificado con exito");
              error_log("MODIFICADO: ".$sql_user);
              redirect("../users.php");
          }else{
              addError("No se pudo crear el usuario");
              redirect("../edit-user-action.php");
          }
          
}


function newUserInsert(){
        $db = conect();
          $sql_user = "INSERT INTO sys_user (username,nombre,password,";
          $sql_user .= "active,perfil_de_usuario,fecha_registro)";
          $sql_user .= " VALUES ('%s','%s',md5('%s'),%s,'Administrador',now())";
          $sql_user = sprintf($sql_user,
          mysql_real_escape_string($_POST['username']),
          mysql_real_escape_string($_POST['nombre']),
          mysql_real_escape_string($_POST['password']),
          mysql_real_escape_string($_POST['active']));
          $statement = $db->prepare($sql_user);
          if($statement->execute()){
              setSuccess("Creado con exito");
          }else{
              addError("No se pudo crear el usuario");
          }
          redirect("../users.php");
}

function getBannerNovedades(){
    $db = conect();
    $sql = "SELECT * FROM news";
    $statement = $db->prepare($sql);
    $statement->execute();
    $banner = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $banner;
}

function getBanner($table){
    $db = conect();
    $sql = "SELECT * FROM $table";
    $statement = $db->prepare($sql);
    $statement->execute();
    $banner = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $banner;
}

function getBannerById($table,$id){
    $db = conect();
    $sql = "SELECT * FROM $table WHERE id = $id";
    $statement = $db->prepare($sql);
    $statement->execute();
    $banner = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $banner;
}

function getCategory(){
    $db = conect();
    $sql = "SELECT * FROM category";
    $statement = $db->prepare($sql);
    $statement->execute();
    $category = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $category;
}

function getCategoryElectromedicina(){
    $db = conect();
    $sql = "SELECT * FROM category_electromedicina";
    $statement = $db->prepare($sql);
    $statement->execute();
    $category = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $category;
}

function getActiveCategories($tabla){
    $db = conect();
    $active = 1;
    $sql = "SELECT * FROM $tabla WHERE active = ?";
    $statement = $db->prepare($sql);
    $statement->execute(array($active));
    $category = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $category;
}


function getCategoryById($id){
    $db = conect();
    $sql = "SELECT * FROM category WHERE id = ?";
    $statement = $db->prepare($sql);
    $statement->execute(array($id));
    $category = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    error_log("CATEG  NAME: ".$category['name']);
    $db = null;
    return $category;
}


function getProducts($table_product){
    $db = conect();
    $sql = "SELECT * FROM $table_product";
    $statement = $db->prepare($sql);
    $statement->execute();
    $products = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $products;
}

function getProductsHot($table_product){
    $db = conect();
    $sql = "SELECT * FROM $table_product where hot = 1";
    $statement = $db->prepare($sql);
    $statement->execute();
    $products = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $products;
}

function getProductByCategory($category_id){
    $db = conect();
    $sql = "SELECT * FROM product WHERE category_id = ? AND active = 1";
    $statement = $db->prepare($sql);
    $statement->execute(array($category_id));
    $products = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $products;
}

function getProductByCategoryElectromedicina($category_id){
    $db = conect();
    $sql = "SELECT * FROM product_electromedicina WHERE category_id = ? AND active = 1";
    $statement = $db->prepare($sql);
    $statement->execute(array($category_id));
    $products = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $products;
}


function getProductById($product_id){
    $db = conect();
    $sql = "SELECT * FROM product WHERE id = ?";
    $statement = $db->prepare($sql);
    $statement->execute(array($product_id));
    $products = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $products;
}

function getProductByIdElectromedicina($product_id){
    $db = conect();
    $sql = "SELECT * FROM product_electromedicina WHERE id = ?";
    $statement = $db->prepare($sql);
    $statement->execute(array($product_id));
    $products = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $products;
}

function getCategoryByIdElectromedicina($product_id){
    $db = conect();
    $sql = "SELECT * FROM category_electromedicina WHERE id = ?";
    $statement = $db->prepare($sql);
    $statement->execute(array($product_id));
    $products = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $products;
}

function saveNewCategory($name,$title,$description,$image_name,$active,$category_table){
    $db = conect();
    $sql = "INSERT INTO $category_table(id,name,title,image,description,active,registered)VALUES(NULL,'$name','$title','$image_name','$description',$active,now());";
    $statement = $db->prepare($sql);
    
    if($statement->execute()){
        error_log("OK");

    }else {
        error_log("NO");

    }
    $db = null;
    error_log($sql);
    
}

function updateCategory($name,$title,$description,$image_name,$active,$id){
    $db = conect();
    $sql = "UPDATE category SET name = ?,title = ?,image = ?,description = ?,active = ?,registered = NOW() WHERE id = ?";
    $statement = $db->prepare($sql);
    
    if($statement->execute(array($name,$title,$image_name,$description,$active,$id)))
        error_log("OK");
    else {
        error_log("NO");
    }
    $db = null;
    error_log($sql);
    
}

function updateCategoryElectromedicina($name,$title,$description,$image_name,$active,$id){
    $db = conect();
    $sql = "UPDATE category_electromedicina SET name = ?,title = ?,image = ?,description = ?,active = ?,registered = NOW() WHERE id = ?";
    $statement = $db->prepare($sql);
    
    if($statement->execute(array($name,$title,$image_name,$description,$active,$id)))
        error_log("OK");
    else {
        error_log("NO");
    }
    $db = null;
    error_log($sql);
    
}

function saveNewproduct($title,$description,$image_name,$active,$product_category_id,$product_category_name,$table_product){
    $db = conect();
    $sql = "INSERT INTO $table_product(id,category_id,category_name,title,description,image,image_icon,active,registered,lastUpdate) VALUES(NULL,$product_category_id,'$product_category_name','$title',?,'$image_name','$image_name',$active,now(),now());";
    $statement = $db->prepare($sql);
    if($statement->execute(array($description)))
error_log("---------------------Ok: ".$sql);
    else {
        error_log("NO");
    }
    $db = null;
    error_log($sql);
    
}

function updateProduct($title,$description,$image_name,$active,$product_category_id,$product_category_name,$id){
    $db = conect();
    $sql = "UPDATE product SET category_id = ?, category_name = ?,title = ?,description = ?,image = ?,image_icon = ?,active = ?,lastUpdate = NOW() WHERE id = ?";
    $statement = $db->prepare($sql);
    
    if($statement->execute(array($product_category_id,$product_category_name,$title,$description,$image_name,$image_name,$active,$id)))
        error_log("OK");
    else {
        error_log("NO");
    }
    $db = null;
    error_log($sql);
}

function updateProductElectromedicina($title,$description,$image_name,$active,$product_category_id,$product_category_name,$id){
    $db = conect();
    $sql = "UPDATE product_electromedicina SET category_id = ?, category_name = ?,title = ?,description = ?,image = ?,image_icon = ?,active = ?,lastUpdate = NOW() WHERE id = ?";
    $statement = $db->prepare($sql);
    
    if($statement->execute(array($product_category_id,$product_category_name,$title,$description,$image_name,$image_name,$active,$id)))
        error_log("OK");
    else {
        error_log("NO");
    }
    $db = null;
    error_log($sql);
}


function updateCategoryState($id,$state){
    $db = conect();
    $sql = "UPDATE category SET active = $state WHERE id = $id";
    $statement = $db->prepare($sql);
    $db = null;
    if($statement->execute()){
        error_log("Activar OK".$sql);

    }else {
        error_log("NO Activar ".$sql);

    }

}

function updateBannerElectromedicinaState($id,$state){
    $db = conect();
    $sql = "UPDATE banner_electromedicina SET active = $state WHERE id = $id";
    $statement = $db->prepare($sql);
    $db = null;
    if($statement->execute()){
        error_log("OK");

    }else {
        error_log("NO");

    }

}

function updateBannerTelecomunicacionesState($id,$state){
    $db = conect();
    $sql = "UPDATE banner_telecomunicaciones SET active = $state WHERE id = $id";
    $statement = $db->prepare($sql);
    $db = null;
    if($statement->execute()){
        error_log("OK");

    }else {
        error_log("NO");

    }

}

function updateCategoryElectromedicinaState($id,$state){
    $db = conect();
    $sql = "UPDATE category_electromedicina SET active = $state WHERE id = $id";
    $statement = $db->prepare($sql);
    $db = null;
    if($statement->execute()){
        error_log("OK");

    }else {
        error_log("NO");

    }

}

function updateProductState($id,$state){
    $db = conect();
    $sql = "UPDATE product SET active = $state WHERE id = $id";
    $statement = $db->prepare($sql);
    
    if($statement->execute()){
        error_log("OK");
        
    }else {
        error_log("NO");
        $db = null;
        return(-1);
    }
    $db = null;
    error_log($sql);
    return(0);
}

function updateProductElectromedicinaState($id,$state){
    $db = conect();
    $sql = "UPDATE product_electromedicina SET active = $state WHERE id = $id";
    $statement = $db->prepare($sql);
    
    if($statement->execute()){
        error_log("OK");
        
    }else {
        error_log("NO");

    }
    $db = null;
    error_log($sql);

}

function updateProductTelecomunicacionesHotState($id,$state){
    $db = conect();
    $sql = "UPDATE product SET hot = $state WHERE id = $id";
    $statement = $db->prepare($sql);
    
    if($statement->execute()){
        error_log("OK");
        
    }else {
        error_log("NO");

    }
    $db = null;
    error_log($sql);

}

function updateProductElectromedicinaHotState($id,$state){
    $db = conect();
    $sql = "UPDATE product_electromedicina SET hot = $state WHERE id = $id";
    $statement = $db->prepare($sql);
    
    if($statement->execute()){
        error_log("OK");
        
    }else {
        error_log("NO");

    }
    $db = null;
    error_log($sql);

}

function getTituloNovedades(){
    $db = conect();
    $sql = "SELECT news_title FROM news_gral";
    $statement = $db->prepare($sql);
    $statement->execute();
    $banner_title = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $banner_title['news_title'];
}

function getTextoNovedades(){
    $db = conect();
    $sql = "SELECT news_text FROM news_gral";
    $statement = $db->prepare($sql);
    $statement->execute();
    $news_text = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $news_text['news_text'];
}

function getBannerTitle(){
    $db = conect();
    $sql = "SELECT  FROM news";
    $statement = $db->prepare($sql);
    $statement->execute();
    $news_text = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $news_text['news_text'];
}