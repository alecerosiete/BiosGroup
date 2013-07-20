<?php
require './inc/config.php';
require './admin/inc/conexion-functions.php';
require './admin/inc/sql-functions.php';

$category_id = $_GET['categoria'];
$products = getProductByCategory($category_id);
$category = getCategoryById($category_id);
$category_name = $category['title'];
include './inc/header.php';
?>

<!DOCTYPE html>
<html>
  <head>
     
    <title>BiosGroup - Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">
    <link href="./css/bootstrap.css" rel="stylesheet">
    
    <style>   
        a {
            text-decoration: none;
            color: #fff;
        }
        a:hover {
            color:#ccc;
            text-decoration: none;
        }
    </style>

  </head>
  <body>
      <div class="container"> 
          
        <div class="header">
            <div class="btn-categorias";>
                    <div class="btn-categorias">
                    <a href="./index.php"><div style="height:104px;width:400px"></div> </a>
                </div>
            </div>
        </div>
          <?php include './inc/menu.php';?>
          
         <div class="banner" style="margin-top:0">
			<object type="application/x-shockwave-flash" 
			width="940" height="260" data="./img/banner_arriba.swf">
			<param name="movie" value="./img/banner_arriba.swf">

			</param>
			</object>
          
         </div>
          <style>
              
              .producto_model_more{
                  width: 262px;
                  height: 57px;
                background: #3C5774;
                color:#3C5774;
                text-align: center;
                padding-top:20px;
               
                font-weight: bold;
              }
              .producto_model{
                  text-align: center;
                  color:#fff;
                  font-weight: bold;
                  font-size: 16px;
                  padding-top:5px;
              }
          </style>
           <h3 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5"><?=$category_name?></h3>
          <div class="container">
            <div class="span11" style="text-align:justify;font-family:'SansSerfRegular'">
               
                <div class="clearfix"></div>
            </div>
          </div>
         <div class="container">
               <div class="span11" style="margin-left: 30px;">
                   <?php 
                   
                     foreach ($products as $product) { 
                         
                   ?>
                   <!-- Inicio productos -->
                    <div class="producto" >
                       <div class="producto_img" style="background: #3C5777 url(./img/products/<?=$product['image']?>) no-repeat;">
                          <div class="producto_model">
                               <?=$product['title']?>
                          </div>
                       </div>
                       <div class="producto_model_more">
                            <a class="btn" href="product-detail.php?product-id=<?=$product['id']?>">+ Ver mas</a>
                       </div>
                    </div>
                   <?php
                     }
                   ?>
                     
                    
               </div>
               <div class="span11" style="text-align:justify;font-family:'SansSerfRegular'">
                    <a style="margin-top:10px;display:inline-block " href="./productos.php" class="btn">Atras</a>   
                        <div class="clearfix"></div>
                    </div>
           </div>
         <div class="footer">
              <?php include_once './inc/footer.php';?>
         </div>
      </div>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
   
    <!-- import jQuery -->
    <script type="text/javascript" src="estro/js/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="estro/js/preview.js"></script>
    
    <script type="text/javascript" src="estro/js/pe.kenburns/jquery.pixelentity.kenburnsSlider.min.js"></script>
    
    <!--specify size of slider-->
      
      
      <script>

        jQuery(function($){
          $(".peKenBurns").peKenburnsSlider({externalFont:true})
        })
        // for google fonts, handle captions sizing only after fonts are loaded
        jQuery(window).load(function() {
          $(".peKenBurns").each(function() {
            $(this).data("peKenburnsSlider").fontsLoaded()
          })
        })
        
      </script>


  </body>
</html>
