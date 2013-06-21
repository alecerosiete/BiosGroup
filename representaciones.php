<?php include './inc/header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
     
    <title>BiosGroup - Representaciones</title>
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
           <h2 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">REPRESENTACIONES</h2>
          <div class="container">
            <div class="span11" style="text-align:justify;font-family:'SansSerfRegular'">
               
                <div class="clearfix"></div>
            </div>
          </div>
         <!--div class="content-3">
             <div class="box">
                 <div class="box-title">
                    <img src="./img/ae_bg.png"> 
                 </div>
                 <div class="box-content-ae-bg">
                     Hemos creado un departamento a<br>
                     disposición de nuestros clientes<br>
                     para ofrecer un asesoramiento<br>
                     personalizado para análisis y<br>
                     diseño, que le permitirá<br>
                     en cada caso, conocer<br>
                     de forma práctica<br>
                     como implementar nuevas<br>
                     tecnologias, acorde a las<br>
                     necesidades de su empresa.
                 </div>
                  
             </div>
              <div class="box">
                 <div class="box-title">
                    <img src="./img/efi_bg.png">
                 </div>
                 <div class="box-content-ef-bg">
                     Todos estos servicios se los ofrecems<br>
                     con la máxima seriedad, rapidez y<br>
                     seguridad, apoyados por el<br>
                     asesoramiento de un equipo de<br>
                     pofesionales especializados<br>
                     en el tema y ue permanecen<br> 
                     siempre a su disposición<br>
                     para ofrecerle un<br>
                     buen servicio.
                 </div>
             </div>
              <div class="box">
                 <div class="box-title">
                    <img src="./img/eco_bg.png">
                 </div>
                 <div class="box-content-eco-bg">
                     Todos nuestros trabajos están enfocados<br>
                     a ofrecerle unos productos y servicios de<br>
                     calidad a un buen precio.
                 </div>
             </div>
         </div-->
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
