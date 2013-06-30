<?php
require './inc/config.php';
require './admin/inc/conexion-functions.php';
require './admin/inc/sql-functions.php';

$product_id = $_GET['product-id'];
$product = getProductById($product_id);
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
                    <span style="border-right:1px solid #fff;padding-right: 5px;;font-weight:bold">
                        <a href="#">Equipos Médicos</a></span>
                    <span style="font-weight:bold"> <a href="#">Telecomunicaciones</a></span>
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
              .model_1{
                    
                   
                }
                .model_2{
                    background: url(../img/prod_2.jpg);
                   
                }
                .model_3{
                    background: url(../img/prod_3.jpg);
                   
                }
                .producto_detalle{
                    width: 900px;
                    height: 364px;
                    border:8px solid #dfdfdf;
                    background: #EFE6E7
                }
                .producto_detalle_img{
                    float:left;
                    width: 326px;
                }
                .producto_detalle_desc{
                    float:left;
                    width: 554px;
                    margin-left: 20px;
                    height: 320px;
                }
          </style>
           <h3 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">CARACTERISTICAS</h3>
          <div class="container">
            <div class="span11" style="text-align:justify;font-family:'SansSerfRegular'">
               
                <div class="clearfix"></div>
            </div>
          </div>
         <div class="container">
               <div class="span11" >
                   <!-- inicio producto -->
                    <div class="producto_detalle" >
                        <div class="producto_detalle_img">
                            <img width="326px" src="./img/products/<?=$product['image']?>">
                        </div>
                        <div class="producto_detalle_desc">
                            <h3><?=$product['title']?></h3>
                            <h5>CARACTERISTICAS</h5>
                            <p>
                                <?=$product['description']?>
                            </p>
                            <a style="margin-top:180px;" href="javascript:history.go(-1)" class="btn">Atras</a>
                        </div>
                        
                            
                    </div>
                   <!-- fin producto -->
               </div>
               
           </div>
         <div class="footer">
             
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


