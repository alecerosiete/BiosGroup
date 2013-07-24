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
/*
function getDatosDePadron($ci){
    $db = conect();
    
    $sql = "SELECT pw.*, pb.`NOMBRE DEL BANCO` AS NOMBREBANCO FROM pddirweb pw INNER JOIN prparban pb ON pw.BANCO = pb.BANCO AND pw.`CEDULA DE IDENTIDAD` = $ci";
    $statement = $db->prepare($sql);
    $statement->execute();
    $rowInfo = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $rowInfo;
}
*/


function getTipoDeUsuario($ci){
    $db = conect();
    /* Obtiene datos del usuario */
    $sql = "SELECT tipo_de_usuario FROM sys_user WHERE ci = '$ci'";
    $statement = $db->prepare($sql);
    $statement->execute();
    $rowInfo = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $rowInfo['tipo_de_usuario'];
}

function getUserInfo(){

    $db = conect();
    $user = getUser();
    $ci = $user['CI'];

    /* Obtiene datos del usuario */
    $sql = "SELECT pw.*, pb.`NOMBRE DEL BANCO` AS NOMBREBANCO FROM pddirweb pw INNER JOIN prparban pb ON pw.BANCO = pb.BANCO AND `CEDULA DE IDENTIDAD` = '$ci'";
    $statement = $db->prepare($sql);
    $statement->execute();
    $rowInfo = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $rowInfo;
}

/*
function getCiudad($key){
    $db = conect();
    $sql = "SELECT * FROM pdparciud WHERE CIUDAD = '$key';";
    $statement = $db->prepare($sql);
    $statement->execute();
    $ciudad = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $ciudad['DESCRIPCION'];
}
*/

/*
function getLocalidad($key){
    $db = conect();
    $sql = "SELECT * FROM pdparloca WHERE LOCALIDAD = '$key';";
    $statement = $db->prepare($sql);
    $statement->execute();
    $localidad = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $localidad['DESCRIPCION'];
}
*/

/*
function getBarrio($key){
    $db = conect();
    $sql = "SELECT * FROM pdparbarr WHERE BARRIO = '$key';";
    $statement = $db->prepare($sql);
    $statement->execute();
    $barrio = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $barrio['DESCRIPCION'];
}
*/

/*
function getBarrios(){
    $db = conect();
    $sql = "SELECT * FROM pdparbarr;";
    $statement = $db->prepare($sql);
    $statement->execute();
    $barrios = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $barrios;
   
}
*/

/*
function getCiudades(){
    $db = conect();
    $sql = "SELECT * FROM pdparciud";
    $statement = $db->prepare($sql);
    $statement->execute();
    $ciudades = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $ciudades;
   
}



function getLocalidades(){
    $db = conect();
    $sql = "SELECT * FROM pdparloca";
    $statement = $db->prepare($sql);
    $statement->execute();
    $localidades = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $localidades;
   
}
*/
/*
function getPrestamos($ci){
    $db = conect();
    $sql = "SELECT * FROM prw805web WHERE `CEDULA DE IDENTIDAD` = $ci";
    $statement = $db->prepare($sql);
    $statement->execute();
    $prestamos = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $prestamos;
   
}
*/
/*
function getTipoDePrestamo($id){
    $db = conect();
    
    $sql = "SELECT * FROM prw_clase_de_prestamo WHERE id = $id";
    $statement = $db->prepare($sql);
    $statement->execute();
    $tipoPrestamo = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $tipoPrestamo['DESCRIPCION'];
   
}
*/

/*
function getTarjetas($ci){
    $db = conect();

    $sql = "SELECT * FROM tctarweb WHERE `NUMERO DE DOCUMENTO` = $ci";
    $statement = $db->prepare($sql);
    $statement->execute();
    $tarjetas = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $tarjetas;
   
}
 * 
 * */
 
/*
function getAportes($ci){
    $db = conect();

    $sql = "SELECT * FROM apw117web WHERE `CEDULA DE IDENTIDAD` = $ci";
    $statement = $db->prepare($sql);
    $statement->execute();
    $aportes = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $aportes;
   
}
*/

/*
function getJubilados($ci){
    $db = conect();
    $sql = "SELECT * FROM jubliqweb WHERE `CEDULA DE IDENTIDAD` = $ci";
    $statement = $db->prepare($sql);
    $statement->execute();
    $jubilados = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $jubilados;
   
}
 * 
 */

/*
function getCodigoOperacion($codigo){
    $db = conect();
    $sql = "SELECT * FROM maetabcod WHERE `CODIGO OPERACION` = $codigo";
    $statement = $db->prepare($sql);
    $statement->execute();
    $codigos = $statement->fetch(PDO::FETCH_ASSOC);
    //print_r($rowInfo);
    $db = null;
    return $codigos['DESCRIPCION'];
   
}
*/
/*
function getLocales(){
    $db = conect();
    $sql = "SELECT * FROM aqpartloc;";
    $statement = $db->prepare($sql);
    $statement->execute();
    $locales = $statement->fetchAll();
    //print_r($rowInfo);
    $db = null;
    return $locales;
   
}
 * 
 */

/*
function getProfile($ci){
     $db = conect();
     
    $sql = "SELECT * FROM sys_user WHERE ci = $ci";
    $statement = $db->prepare($sql);
    $statement->execute();
    $rowInfo = $statement->fetch(PDO::FETCH_ASSOC);
    $db = null;
    if(($rowInfo[$ci])>0){
        return 1;
    }else{
        return 0;
    }
}
*/

function activateUserState($ci){
    $db = conect();
    
    $sql = "SELECT active FROM sys_user WHERE ci  = '$ci' ";
    $statement = $db->prepare($sql);
    $statement->execute();
    $active = $statement->fetch(PDO::FETCH_ASSOC);
    error_log("ESTADO ACTIVE:".$active['active']);
    $sql = "UPDATE sys_user SET active = ";
    $sql .= $active['active'] == 1 ? 0 : 1;
    $sql .= " WHERE ci = '$ci'";
    $statement = $db->prepare($sql);
    $statement->execute();
    $sql = "SELECT active FROM sys_user WHERE ci  = '$ci' ";
    $statement = $db->prepare($sql);
    $statement->execute();
    $active = $statement->fetch(PDO::FETCH_ASSOC);
    error_log("ESTADO ACTIVE:".$active['active']);
    
    $db = null;
    return $active['active'];
    
        
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
    $sql = "INSERT INTO $table_product(id,category_id,category_name,title,description,image,image_icon,active,registered,lastUpdate) VALUES(NULL,$product_category_id,'$product_category_name','$title','$description','$image_name','$image_name',$active,now(),now());";
    $statement = $db->prepare($sql);
    
    if($statement->execute())
        error_log("OK");
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