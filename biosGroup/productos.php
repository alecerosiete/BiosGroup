<?php include './inc/header.php'; ?>
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
          
           <h2 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">PRODUCTOS</h2>
          <div class="container">
            <div class="span11" style="text-align:justify;font-family:'SansSerfRegular'">
               
                <div class="clearfix"></div>
            </div>
          </div>
         <div class="container">
               <div class="span11" >
                   
                    <div class="producto" >
                        <div class="producto_img prod_1">
                            
                            
                             <div class="producto_more" style="float:left">
                                 <a class="btn btn-mini" href="prod_1.php">+ Ver mas</a>
                             </div>
                            <div style="clear:both"></div>
                        </div>
                       
                        <div class="producto_desc">
                            <div style="margin-left:10px; padding-top:10px">
                            INSTRUMENTOS DE <br>
                            MEDICION PARA REDES<br>
                            DE TRANSPORTE, ACCESO E IP
                            </div>
                        </div>
                    </div>
                   <div class="producto" >
                        <div class="producto_img prod_2">
                            
                            
                             <div class="producto_more" style="float:left">
                                 <a class="btn btn-mini" href="prod_1.php">+ Ver mas</a>
                             </div>
                            <div style="clear:both"></div>
                        </div>
                       
                        <div class="producto_desc">
                            <div style="margin-left:10px; padding-top:10px">
                            INSTRUMENTOS DE<br>
                            MEDICION PARA REDES<br>
                            DE TRANSPORTE Y ETHERNET
                            </div>
                        </div>
                    </div>
                   <div class="producto" >
                        <div class="producto_img prod_3">
                            
                            
                             <div class="producto_more" style="float:left">
                                <a class="btn btn-mini" href="prod_1.php">+ Ver mas</a>
                             </div>
                            <div style="clear:both"></div>
                        </div>
                       
                        <div class="producto_desc">
                             <div style="margin-left:10px; padding-top:10px">
                            SISTEMAS DE<br>
                            GERENCIAMIENTO DE REDES<br>
                            CALIDAD Y DESEMPEÑO
                            </div>
                        </div>
                    </div>
                                     
                       
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
