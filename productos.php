<?php
require './inc/config.php';
require './admin/inc/conexion-functions.php';
require './admin/inc/sql-functions.php';

$db = conect();
$categories = getActiveCategories();
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
          
           <h2 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">PRODUCTOS</h2>
          <div class="container">
            <div class="span11" style="text-align:justify;font-family:'SansSerfRegular'">
               
                <div class="clearfix"></div>
            </div>
          </div>
         <div class="container">
               <div class="span11" style="margin-left: 30px;">
                   <!-- /productos -->
                   <?php 
                   
                    
                        foreach ($categories as $category) { 
                         
                   ?>
                    <div class="producto" >
                        <div class="producto_img" style="background: #475875  url(./img/categories/<?=$category['image']?>)">
                            
                            
                             <div class="producto_more" style="float:left">
                                 <a class="btn btn-mini" href="view-products.php?categoria=<?=$category['id']?>">+ Ver mas</a>
                             </div>
                            <div style="clear:both"></div>
                        </div>
                       
                        <div class="producto_desc">
                            <div style="margin-left:10px; padding-top:10px">
                            <?= $category['title'] ?>
                            </div>
                        </div>
                    </div>
                   <?php 
                        }
                    
                   ?>
                   <!-- fin productos -->
                       
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
